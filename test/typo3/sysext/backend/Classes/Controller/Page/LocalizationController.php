<?php
namespace TYPO3\CMS\Backend\Controller\Page;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Configuration\TranslationConfigurationProvider;
use TYPO3\CMS\Backend\Domain\Repository\Localization\LocalizationRepository;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Http\JsonResponse;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Versioning\VersionState;

/**
 * LocalizationController handles the AJAX requests for record localization
 */
class LocalizationController
{
    /**
     * @var string
     */
    const ACTION_COPY = 'copyFromLanguage';

    /**
     * @var string
     */
    const ACTION_LOCALIZE = 'localize';

    /**
     * @var IconFactory
     */
    protected $iconFactory;

    /**
     * @var LocalizationRepository
     */
    protected $localizationRepository;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iconFactory = GeneralUtility::makeInstance(IconFactory::class);
        $this->localizationRepository = GeneralUtility::makeInstance(LocalizationRepository::class);
    }

    /**
     * Get used languages in a colPos of a page
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function getUsedLanguagesInPageAndColumn(ServerRequestInterface $request, ResponseInterface $response)
    {
        $params = $request->getQueryParams();
        if (!isset($params['pageId'], $params['colPos'], $params['languageId'])) {
            $response = $response->withStatus(400);
            return $response;
        }

        $pageId = (int)$params['pageId'];
        $colPos = (int)$params['colPos'];
        $languageId = (int)$params['languageId'];

        /** @var TranslationConfigurationProvider $translationProvider */
        $translationProvider = GeneralUtility::makeInstance(TranslationConfigurationProvider::class);
        $systemLanguages = $translationProvider->getSystemLanguages($pageId);

        $availableLanguages = [];

        // First check whether column has localized records
        $elementsInColumnCount = $this->localizationRepository->getLocalizedRecordCount($pageId, $colPos, $languageId);

        if ($elementsInColumnCount === 0) {
            $fetchedAvailableLanguages = $this->localizationRepository->fetchAvailableLanguages($pageId, $colPos, $languageId);
            $availableLanguages[] = $systemLanguages[0];

            foreach ($fetchedAvailableLanguages as $language) {
                if (isset($systemLanguages[$language['uid']])) {
                    $availableLanguages[] = $systemLanguages[$language['uid']];
                }
            }
        } else {
            $result = $this->localizationRepository->fetchOriginLanguage($pageId, $colPos, $languageId);
            $availableLanguages[] = $systemLanguages[$result['sys_language_uid']];
        }

        // Pre-render all flag icons
        foreach ($availableLanguages as &$language) {
            if ($language['flagIcon'] === 'empty-empty') {
                $language['flagIcon'] = '';
            } else {
                $language['flagIcon'] = $this->iconFactory->getIcon($language['flagIcon'], Icon::SIZE_SMALL)->render();
            }
        }

        return GeneralUtility::makeInstance(JsonResponse::class)->setPayload($availableLanguages);
    }

    /**
     * Get a prepared summary of records being translated
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function getRecordLocalizeSummary(ServerRequestInterface $request, ResponseInterface $response)
    {
        $params = $request->getQueryParams();
        if (!isset($params['pageId'], $params['colPos'], $params['destLanguageId'], $params['languageId'])) {
            $response = $response->withStatus(400);
            return $response;
        }

        $records = [];
        $result = $this->localizationRepository->getRecordsToCopyDatabaseResult(
            $params['pageId'],
            $params['colPos'],
            $params['destLanguageId'],
            $params['languageId'],
            '*'
        );

        while ($row = $result->fetch()) {
            BackendUtility::workspaceOL('tt_content', $row, -99, true);
            if (!$row || VersionState::cast($row['t3ver_state'])->equals(VersionState::DELETE_PLACEHOLDER)) {
                continue;
            }
            $records[] = [
                'icon' => $this->iconFactory->getIconForRecord('tt_content', $row, Icon::SIZE_SMALL)->render(),
                'title' => $row[$GLOBALS['TCA']['tt_content']['ctrl']['label']],
                'uid' => $row['uid']
            ];
        }

        return GeneralUtility::makeInstance(JsonResponse::class)->setPayload($records);
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function localizeRecords(ServerRequestInterface $request, ResponseInterface $response)
    {
        $params = $request->getQueryParams();
        if (!isset($params['pageId'], $params['srcLanguageId'], $params['destLanguageId'], $params['action'], $params['uidList'])) {
            $response = $response->withStatus(400);
            return $response;
        }

        if ($params['action'] !== static::ACTION_COPY && $params['action'] !== static::ACTION_LOCALIZE) {
            $response->getBody()->write('Invalid action "' . $params['action'] . '" called.');
            $response = $response->withStatus(400);
            return $response;
        }

        // Filter transmitted but invalid uids
        $params['uidList'] = $this->filterInvalidUids(
            (int)$params['pageId'],
            (int)$params['colPos'],
            (int)$params['destLanguageId'],
            (int)$params['srcLanguageId'],
            $params['uidList']
        );

        $this->process($params);

        return GeneralUtility::makeInstance(JsonResponse::class)->setPayload([]);
    }

    /**
     * Gets all possible UIDs of a page, colPos and language that might be processed and removes invalid UIDs that might
     * be smuggled in.
     *
     * @param int $pageId
     * @param int $colPos
     * @param int $destLanguageId
     * @param int $srcLanguageId
     * @param array $transmittedUidList
     * @return array
     */
    protected function filterInvalidUids(
        int $pageId,
        int $colPos,
        int $destLanguageId,
        int $srcLanguageId,
        array $transmittedUidList
    ): array {
        // Get all valid uids that can be processed
        $validUidList = $result = $this->localizationRepository->getRecordsToCopyDatabaseResult(
            $pageId,
            $colPos,
            $destLanguageId,
            $srcLanguageId,
            'uid'
        );

        return array_intersect(array_unique($transmittedUidList), array_column($validUidList->fetchAll(), 'uid'));
    }

    /**
     * Processes the localization actions
     *
     * @param array $params
     */
    protected function process($params)
    {
        $destLanguageId = (int)$params['destLanguageId'];

        // Build command map
        $cmd = [
            'tt_content' => []
        ];

        if (isset($params['uidList']) && is_array($params['uidList'])) {
            foreach ($params['uidList'] as $currentUid) {
                if ($params['action'] === static::ACTION_LOCALIZE) {
                    $cmd['tt_content'][$currentUid] = [
                        'localize' => $destLanguageId
                    ];
                } else {
                    $cmd['tt_content'][$currentUid] = [
                        'copyToLanguage' => $destLanguageId,
                    ];
                }
            }
        }

        $dataHandler = GeneralUtility::makeInstance(DataHandler::class);
        $dataHandler->start([], $cmd);
        $dataHandler->process_cmdmap();
    }
}

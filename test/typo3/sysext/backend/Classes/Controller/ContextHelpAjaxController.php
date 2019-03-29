<?php
namespace TYPO3\CMS\Backend\Controller;

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
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Http\JsonResponse;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class ContextHelpAjaxController
 */
class ContextHelpAjaxController
{
    /**
     * The main dispatcher function. Collect data and prepare HTML output.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function getHelpAction(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $params = isset($request->getParsedBody()['params']) ? $request->getParsedBody()['params'] : $request->getQueryParams()['params'];
        if ($params['action'] === 'getContextHelp') {
            $result = $this->getContextHelp($params['table'], $params['field']);
            return GeneralUtility::makeInstance(JsonResponse::class, [
                'title' => $result['title'],
                'content' => $result['description'],
                'link' => $result['moreInfo']
            ]);
        }
        return $response;
    }

    /**
     * Fetch the context help for the given table/field parameters
     *
     * @param string $table Table identifier
     * @param string $field Field identifier
     * @return array complete Help information
     */
    protected function getContextHelp($table, $field)
    {
        $helpTextArray = BackendUtility::helpTextArray($table, $field);
        $iconFactory = GeneralUtility::makeInstance(IconFactory::class);
        $moreIcon = $helpTextArray['moreInfo'] ? $iconFactory->getIcon('actions-view-go-forward', Icon::SIZE_SMALL)->render() : '';
        return [
            'title' => $helpTextArray['title'],
            'description' => '<p class="t3-help-short' . ($moreIcon ? ' tipIsLinked' : '') . '">' . $helpTextArray['description'] . $moreIcon . '</p>',
            'id' => $table . '.' . $field,
            'moreInfo' => $helpTextArray['moreInfo']
        ];
    }
}

<?php
namespace TYPO3\CMS\Backend\Controller\File;

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
use TYPO3\CMS\Backend\Form\FormResultCompiler;
use TYPO3\CMS\Backend\Form\NodeFactory;
use TYPO3\CMS\Backend\Template\Components\ButtonBar;
use TYPO3\CMS\Backend\Template\DocumentTemplate;
use TYPO3\CMS\Backend\Template\ModuleTemplate;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageService;
use TYPO3\CMS\Core\Resource\Exception\InsufficientFileAccessPermissionsException;
use TYPO3\CMS\Core\Resource\ResourceFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\HttpUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

/**
 * Script Class for rendering the file editing screen
 */
class EditFileController
{
    /**
     * Module content accumulated.
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $title;

    /**
     * Document template object
     *
     * @var DocumentTemplate
     */
    public $doc;

    /**
     * Original input target
     *
     * @var string
     */
    public $origTarget;

    /**
     * The original target, but validated.
     *
     * @var string
     */
    public $target;

    /**
     * Return URL of list module.
     *
     * @var string
     */
    public $returnUrl;

    /**
     * the file that is being edited on
     *
     * @var \TYPO3\CMS\Core\Resource\AbstractFile
     */
    protected $fileObject;

    /**
     * ModuleTemplate object
     *
     * @var ModuleTemplate
     */
    protected $moduleTemplate;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->moduleTemplate = GeneralUtility::makeInstance(ModuleTemplate::class);
        $GLOBALS['SOBE'] = $this;
        $this->init();
    }

    /**
     * Initialize script class
     *
     * @throws InsufficientFileAccessPermissionsException
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    protected function init()
    {
        // Setting target, which must be a file reference to a file within the mounts.
        $this->target = ($this->origTarget = ($fileIdentifier = GeneralUtility::_GP('target')));
        $this->returnUrl = GeneralUtility::sanitizeLocalUrl(GeneralUtility::_GP('returnUrl'));
        // create the file object
        if ($fileIdentifier) {
            $this->fileObject = ResourceFactory::getInstance()
                ->retrieveFileOrFolderObject($fileIdentifier);
        }
        // Cleaning and checking target directory
        if (!$this->fileObject) {
            $title = $this->getLanguageService()->sL('LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:paramError');
            $message = $this->getLanguageService()->sL('LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:targetNoDir');
            throw new \RuntimeException($title . ': ' . $message, 1294586841);
        }
        if ($this->fileObject->getStorage()->getUid() === 0) {
            throw new InsufficientFileAccessPermissionsException(
                'You are not allowed to access files outside your storages',
                1375889832
            );
        }

        // Setting the title and the icon
        $icon = $this->moduleTemplate->getIconFactory()->getIcon('apps-filetree-root', Icon::SIZE_SMALL)->render();
        $this->title = $icon
            . htmlspecialchars(
                $this->fileObject->getStorage()->getName()
            ) . ': ' . htmlspecialchars(
                $this->fileObject->getIdentifier()
            );

        // Setting template object
        $this->doc = GeneralUtility::makeInstance(DocumentTemplate::class);
        $this->moduleTemplate->addJavaScriptCode(
            'FileEditBackToList',
            'function backToList() {
				top.goToModule("file_FilelistList");
			}'
        );
    }

    /**
     * Main function, rendering the actual content of the editing page
     */
    public function main()
    {
        $dataColumnDefinition = [
            'label' => htmlspecialchars($this->getLanguageService()->sL('LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:file'))
                . ' ' . htmlspecialchars($this->target),
            'config' => [
                'type' => 'text',
                'cols' => 48,
                'wrap' => 'OFF',
            ],
            'defaultExtras' => 'fixed-font: enable-tab'
        ];

        $this->getButtons();
        // Hook: before compiling the output
        foreach ($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['preOutputProcessingHook'] ?? [] as $hookFunction) {
            $hookParameters = [
                'content' => &$this->content,
                'target' => &$this->target,
                'dataColumnDefinition' => &$dataColumnDefinition,
            ];
            GeneralUtility::callUserFunction($hookFunction, $hookParameters, $this);
        }

        $assigns = [];
        /** @var \TYPO3\CMS\Backend\Routing\UriBuilder $uriBuilder */
        $uriBuilder = GeneralUtility::makeInstance(\TYPO3\CMS\Backend\Routing\UriBuilder::class);
        $assigns['moduleUrlTceFile'] = (string)$uriBuilder->buildUriFromRoute('tce_file');
        $assigns['fileName'] = $this->fileObject->getName();

        $extList = $GLOBALS['TYPO3_CONF_VARS']['SYS']['textfile_ext'];
        try {
            if (!$extList || !GeneralUtility::inList($extList, $this->fileObject->getExtension())) {
                throw new \Exception('Files with that extension are not editable. Allowed extensions are: ' . $extList, 1476050135);
            }

            // Making the formfields
            $hValue = (string)$uriBuilder->buildUriFromRoute('file_edit', [
                'target' => $this->origTarget,
                'returnUrl' => $this->returnUrl
            ]);

            $formData = [
                'databaseRow' => [
                    'uid' => 0,
                    'data' => $this->fileObject->getContents(),
                    'target' => $this->fileObject->getUid(),
                    'redirect' => $hValue,
                ],
                'tableName' => 'editfile',
                'processedTca' => [
                    'columns' => [
                        'data' => $dataColumnDefinition,
                        'target' => [
                            'config' => [
                                'type' => 'input',
                                'renderType' => 'hidden',
                            ],
                        ],
                        'redirect' => [
                            'config' => [
                                'type' => 'input',
                                'renderType' => 'hidden',
                            ],
                        ],
                    ],
                    'types' => [
                        1 => [
                            'showitem' => 'data,target,redirect',
                        ],
                    ],
                ],
                'recordTypeValue' => 1,
                'inlineStructure' => [],
                'renderType' => 'fullRecordContainer',
            ];

            $resultArray = GeneralUtility::makeInstance(NodeFactory::class)->create($formData)->render();
            $formResultCompiler = GeneralUtility::makeInstance(FormResultCompiler::class);
            $formResultCompiler->mergeResult($resultArray);

            $form = $formResultCompiler->addCssFiles()
                . $resultArray['html']
                . $formResultCompiler->printNeededJSFunctions();

            $assigns['form'] = $form;
        } catch (\Exception $e) {
            $flashMessage = GeneralUtility::makeInstance(FlashMessage::class, $e->getMessage(), '', FlashMessage::ERROR, true);

            $flashMessageService = GeneralUtility::makeInstance(FlashMessageService::class);
            $defaultFlashMessageQueue = $flashMessageService->getMessageQueueByIdentifier();
            $defaultFlashMessageQueue->enqueue($flashMessage);

            HttpUtility::redirect($this->returnUrl, HttpUtility::HTTP_STATUS_500);
        }

        // Rendering of the output via fluid
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplateRootPaths([GeneralUtility::getFileAbsFileName('EXT:backend/Resources/Private/Templates')]);
        $view->setPartialRootPaths([GeneralUtility::getFileAbsFileName('EXT:backend/Resources/Private/Partials')]);
        $view->setTemplatePathAndFilename(GeneralUtility::getFileAbsFileName(
            'EXT:backend/Resources/Private/Templates/File/EditFile.html'
        ));
        $view->assignMultiple($assigns);
        $pageContent = $view->render();

        // Hook: after compiling the output
        foreach ($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['postOutputProcessingHook'] ?? [] as $hookFunction) {
            $hookParameters = [
                'pageContent' => &$pageContent,
                'target' => &$this->target
            ];
            GeneralUtility::callUserFunction($hookFunction, $hookParameters, $this);
        }

        $this->content .= $pageContent;
        $this->moduleTemplate->setContent($this->content);
    }

    /**
     * Processes the request, currently everything is handled and put together via "main()"
     *
     * @param ServerRequestInterface $request the current request
     * @param ResponseInterface $response
     * @return ResponseInterface the response with the content
     */
    public function mainAction(ServerRequestInterface $request, ResponseInterface $response)
    {
        $this->main();

        $response->getBody()->write($this->moduleTemplate->renderContent());
        return $response;
    }

    /**
     * Builds the buttons for the docheader and returns them as an array
     */
    public function getButtons()
    {
        $buttonBar = $this->moduleTemplate->getDocHeaderComponent()->getButtonBar();

        $lang = $this->getLanguageService();
        // CSH button
        $helpButton = $buttonBar->makeHelpButton()
            ->setFieldName('file_edit')
            ->setModuleName('xMOD_csh_corebe');
        $buttonBar->addButton($helpButton);

        // Save button
        $saveButton = $buttonBar->makeInputButton()
            ->setName('_save')
            ->setValue('1')
            ->setForm('EditFileController')
            ->setTitle($lang->sL('LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:file_edit.php.submit'))
            ->setIcon($this->moduleTemplate->getIconFactory()->getIcon('actions-document-save', Icon::SIZE_SMALL));

        // Save and Close button
        $saveAndCloseButton = $buttonBar->makeInputButton()
            ->setName('_saveandclosedok')
            ->setValue('1')
            ->setForm('EditFileController')
            ->setOnClick(
                'document.editform.elements.namedItem("data[editfile][0][redirect]").value='
                . GeneralUtility::quoteJSvalue($this->returnUrl)
                . ';'
            )
            ->setTitle($lang->sL('LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:file_edit.php.saveAndClose'))
            ->setIcon($this->moduleTemplate->getIconFactory()->getIcon(
                'actions-document-save-close',
                Icon::SIZE_SMALL
            ));

        $splitButton = $buttonBar->makeSplitButton()
            ->addItem($saveButton)
            ->addItem($saveAndCloseButton);
        $buttonBar->addButton($splitButton, ButtonBar::BUTTON_POSITION_LEFT, 20);

        // Cancel button
        $closeButton = $buttonBar->makeLinkButton()
            ->setHref('#')
            ->setOnClick('backToList(); return false;')
            ->setTitle($lang->sL('LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.cancel'))
            ->setIcon($this->moduleTemplate->getIconFactory()->getIcon('actions-close', Icon::SIZE_SMALL));
        $buttonBar->addButton($closeButton, ButtonBar::BUTTON_POSITION_LEFT, 10);

        // Make shortcut:
        $shortButton = $buttonBar->makeShortcutButton()
            ->setModuleName('file_edit')
            ->setGetVariables(['target']);
        $buttonBar->addButton($shortButton);
    }

    /**
     * Returns LanguageService
     *
     * @return \TYPO3\CMS\Core\Localization\LanguageService
     */
    protected function getLanguageService()
    {
        return $GLOBALS['LANG'];
    }

    /**
     * Returns the current BE user.
     *
     * @return \TYPO3\CMS\Core\Authentication\BackendUserAuthentication
     */
    protected function getBackendUser()
    {
        return $GLOBALS['BE_USER'];
    }
}

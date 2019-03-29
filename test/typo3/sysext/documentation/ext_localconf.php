<?php
defined('TYPO3_MODE') or die();

// Open extension manual from within Extension Manager
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)
    ->connect(
        \TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::class,
        'processActions',
        \TYPO3\CMS\Documentation\Slots\ExtensionManager::class,
        'processActions'
    );

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook']['cshmanual'] = \TYPO3\CMS\Documentation\Service\JavaScriptService::class . '->addJavaScript';

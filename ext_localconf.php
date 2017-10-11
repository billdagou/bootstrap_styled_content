<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'bootstrapstyledcontent/Configuration/TypoScript/';

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('flux')) {
    \FluidTYPO3\Flux\Core::registerProviderExtensionKey('Dagou.BootstrapStyledContent', 'Content');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Resource\FileReference::class]['className'] = \Dagou\BootstratpStyledContent\Resource\FileReference::class;
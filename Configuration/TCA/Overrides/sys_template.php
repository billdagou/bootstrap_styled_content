<?php
defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'bootstrap_styled_content',
    'Configuration/TypoScript/',
    'Bootstrap Content Elements'
);
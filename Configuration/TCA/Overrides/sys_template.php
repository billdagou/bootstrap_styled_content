<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	'bootstrap_styled_content',
	'Configuration/TypoScript/',
	'Bootstrap Content Elements'
);
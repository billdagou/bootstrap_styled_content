<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$additionalColumns = [
	'bullets_type' => [
		'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
		'exclude' => TRUE,
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.bullets_type.I.0', 0],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.bullets_type.I.1', 1],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.bullets_type.I.2', 2],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.bullets_type.I.3', 3],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.bullets_type.I.4', 4],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.bullets_type.I.5', 5],
			],
			'default' => 0,
		],
	],
	'column_class' => [
		'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.column_class',
		'exclude' => TRUE,
		'config' => [
			'type' => 'input',
			'size' => 20,
		],
	],
	'header_layout' => [
		'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
		'exclude' => TRUE,
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_layout.I.1', 1],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_layout.I.2', 2],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_layout.I.3', 3],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_layout.I.4', 4],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_layout.I.5', 5],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_layout.I.6', 6],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_layout.I.100', 100],
			],
			'default' => 1,
		],
	],
	'header_position' => [
		'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
		'exclude' => TRUE,
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_position.I.', ''],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_position.I.center', 'center'],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_position.I.right', 'right'],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_position.I.left', 'left'],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_position.I.justify', 'justify'],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.header_position.I.nowrap', 'nowrap'],
			],
			'default' => '',
		],
	],
	'imagecols' => [
		'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
		'exclude' => TRUE,
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				[0, 0],
				[1, 1],
				[2, 2],
				[3, 3],
				[4, 4],
				[6, 6],
				[12, 12],
			],
		],
	],
	'linkToTop_position' => [
		'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.linkToTop_position',
		'exclude' => TRUE,
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.linkToTop_position.I.right', 'right'],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.linkToTop_position.I.left', 'left'],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.linkToTop_position.I.center', 'center'],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.linkToTop_position.I.justify', 'justify'],
				['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.linkToTop_position.I.nowrap', 'nowrap'],
			],
			'default' => 'right',
		],
	],
	'page_header' => [
		'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:tt_content.page_header',
		'exclude' => TRUE,
		'config' => [
			'type' => 'check',
			'items' => [
				['LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'],
			],
		],
	],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'appearanceLinks', 'linkToTop_position', 'after:linkToTop');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'gallerySettings', 'column_class', 'after:imagecols');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'headers', 'page_header', 'before:header_layout');
$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] = '';
$GLOBALS['TCA']['tt_content']['palettes']['imagelinks']['showitem'] = '';
$GLOBALS['TCA']['tt_content']['palettes']['mediaAdjustments']['showitem'] = '';
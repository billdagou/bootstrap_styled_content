<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$additionalColumns = [
    'description_position' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description_position',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description_position.I.', ''],
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description_position.I.center', 'center'],
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description_position.I.right', 'right'],
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description_position.I.left', 'left'],
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description_position.I.justify', 'justify'],
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description_position.I.nowrap', 'nowrap'],
            ],
            'default' => '',
        ],
    ],
    'responsive' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.responsive',
        'exclude' => TRUE,
        'config' => [
            'type' => 'check',
            'items' => [
                ['LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'],
            ],
        ],
    ],
    'shape' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.shape',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.shape.I.', ''],
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.shape.I.rounded', 'rounded'],
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.shape.I.circle', 'circle'],
                ['LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.shape.I.thumbnail', 'thumbnail'],
            ],
            'default' => '',
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $additionalColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('sys_file_reference', 'imageoverlayPalette', '--linebreak--', 'before:description');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('sys_file_reference', 'imageoverlayPalette', 'description_position', 'after:description');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('sys_file_reference', 'imageoverlayPalette', 'responsive,shape,--linebreak--', 'before:crop');
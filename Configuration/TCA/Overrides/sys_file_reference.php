<?php
defined('TYPO3_MODE') || die();

$additionalColumns = [
    'aspect_ratio' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.aspect_ratio',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['21:9', '21x9'],
                ['16:9', '16x9'],
                ['4:3', '4x3'],
                ['1:1', '1x1'],
            ],
            'default' => '16x9',
        ],
    ],
    'description_position' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.description_position',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.description_position.I.center',
                    'center',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.description_position.I.start',
                    'start',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.description_position.I.end',
                    'end',
                ],
            ],
            'default' => '',
        ],
    ],
    'responsive' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.responsive',
        'exclude' => TRUE,
        'config' => [
            'type' => 'check',
            'items' => [
                ['LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'],
            ],
        ],
    ],
    'shape' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.shape',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.shape.I.rounded',
                    'rounded',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.shape.I.circle',
                    'circle',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.shape.I.square',
                    'square',
                ],
            ],
            'default' => '',
        ],
    ],
    'thumbnail' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_db.xlf:sys_file_reference.thumbnail',
        'exclude' => TRUE,
        'config' => [
            'type' => 'check',
            'items' => [
                ['LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'],
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $additionalColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'audioOverlayPalette',
    'description_position',
    'after:description'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'audioOverlayPalette',
    'responsive',
    'before:autoplay'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'imageoverlayPalette',
    '--linebreak--',
    'before:description'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'imageoverlayPalette',
    'description_position',
    'after:description'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'imageoverlayPalette',
    'responsive, shape, thumbnail, --linebreak--',
    'before:crop'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'videoOverlayPalette',
    'description_position',
    'after:description'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'videoOverlayPalette',
    'responsive, aspect_ratio',
    'before:autoplay'
);
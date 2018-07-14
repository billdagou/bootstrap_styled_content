<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$additionalColumns = [
    'column_classes' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.column_classes',
        'exclude' => TRUE,
        'config' => [
            'type' => 'input',
        ],
    ],
    'display_heading' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.display_heading',
        'exclude' => TRUE,
        'config' => [
            'type' => 'check',
            'items' => [
                ['LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'],
            ],
        ],
    ],
    'extra_classes' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.extra_classes',
        'exclude' => TRUE,
        'config' => [
            'type' => 'input',
        ],
    ],
    'gallery_classes' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.gallery_classes',
        'exclude' => TRUE,
        'config' => [
            'type' => 'input',
        ],
    ],
    'header_layout' => [
        'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.header_layout.I.1',
                    1,
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.header_layout.I.2',
                    2,
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.header_layout.I.3',
                    3,
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.header_layout.I.4',
                    4,
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.header_layout.I.5',
                    5,
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.header_layout.I.6',
                    6,
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.header_layout.I.100',
                    100,
                ],
            ],
        ],
    ],
    'margin_side' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side.I.none',
                    '',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side.I.top',
                    't',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side.I.right',
                    'r',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side.I.bottom',
                    'b',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side.I.left',
                    'l',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side.I.x',
                    'x',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side.I.y',
                    'y',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side.I.all',
                    'all',
                ],
            ],
        ],
    ],
    'margin_size' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size.I.0',
                    '0',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size.I.1',
                    '1',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size.I.2',
                    '2',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size.I.3',
                    '3',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size.I.4',
                    '4',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size.I.5',
                    '5',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size.I.auto',
                    'auto',
                ],
            ],
        ],
    ],
    'padding_side' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side.I.none',
                    '',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side.I.top',
                    'top',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side.I.right',
                    'right',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side.I.bottom',
                    'bottom',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side.I.left',
                    'left',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side.I.x',
                    'x',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side.I.y',
                    'y',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side.I.all',
                    'all',
                ],
            ],
        ],
    ],
    'padding_size' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_size',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_size.I.0',
                    '0',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_size.I.1',
                    '1',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_size.I.2',
                    '2',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_size.I.3',
                    '3',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_size.I.4',
                    '4',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_size.I.5',
                    '5',
                ],
            ],
        ],
    ],
    'table_class' => [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => [
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_class.I.striped',
                    'striped',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_class.I.bordered',
                    'bordered',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_class.I.borderless',
                    'borderless',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_class.I.hover',
                    'hover',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_class.I.sm',
                    'sm',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_class.I.color',
                    'dark',
                ],
            ],
            'maxitems' => 99,
        ],
    ],
    'table_responsive' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_responsive',
        'exclude' => TRUE,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_responsive.I.none',
                    '',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_responsive.I.xs',
                    'xs',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_responsive.I.sm',
                    'sm',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_responsive.I.md',
                    'md',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_responsive.I.lg',
                    'lg',
                ],
                [
                    'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_responsive.I.lg',
                    'xl',
                ],
            ],
        ],
    ],
    'table_thead' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_thead',
        'exclude' => TRUE,
        'config' => [
            'type' => 'check',
            'items' => [
                ['LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'],
            ],
        ],
    ],
    'table_thead_col' => [
        'label' => 'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.table_thead_col',
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
$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] = 'margin_side;LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_side,
    margin_size;LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.margin_size,
    padding_side;LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_side,
    padding_size;LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.padding_size,
    --linebreak--,extra_classes';
$GLOBALS['TCA']['tt_content']['palettes']['imagelinks']['showitem'] = '';
$GLOBALS['TCA']['tt_content']['palettes']['mediaAdjustments']['showitem'] = '';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'bullets_type',
    [
        'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.bullets_type.I.3',
        3,
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'bullets_type',
    [
        'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.bullets_type.I.4',
        4,
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'display_heading',
    'before:header_layout'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'header_position',
    [
        'LLL:EXT:bootstrap_styled_content/Resources/Private/Language/locallang_tca.xlf:tt_content.header_position.I.justify',
        'justify',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem('tt_content', 'imagecols', [0, 0], '1', 'before');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'gallerySettings',
    'gallery_classes',
    'before:imageorient'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'gallerySettings',
    'column_classes',
    'after:imagecols'
);

$GLOBALS['TCA']['tt_content']['palettes']['tablelayout'] = [
    'showitem' => 'table_responsive, table_thead, table_thead_col, table_tfoot, --linebreak--, table_class',
];
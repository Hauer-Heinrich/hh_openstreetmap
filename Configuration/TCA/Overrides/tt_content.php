<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'hh_openstreetmap',
    'Configuration/TypoScript/',
    'hh_openstreetmap'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['hh_openstreetmap_openstreetmap'] = 'tx_hh_openstreetmap_openstreetmap';
$tempColumns = [
    'tx_hh_openstreetmap_map_fit' => [
        'onChange' => 'reload',
        'config' => [
            'type' => 'check',
            'items' => [
                0 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_map_fit.I.0',
                ],
            ],
            'default' => 0,
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_map_fit',
    ],
    'tx_hh_openstreetmap_options_scrollWheelZoom' => [
        'onChange' => 'reload',
        'config' => [
            'type' => 'check',
            'items' => [
                0 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_options_scrollWheelZoom.I.0',
                ],
            ],
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_options_scrollWheelZoom',
    ],
    'tx_hh_openstreetmap_map_lat' => [
        'displayCond' => 'FIELD:tx_hh_openstreetmap_map_fit:=:0',
        'config' => [
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_map_lat',
    ],
    'tx_hh_openstreetmap_map_long' => [
        'displayCond' => 'FIELD:tx_hh_openstreetmap_map_fit:=:0',
        'config' => [
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_map_long',
    ],
    'tx_hh_openstreetmap_marker' => [
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_hh_openstreetmap_marker',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
            'foreign_sortby' => 'sorting',
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'collapseAll' => true,
                'expandSingle' => '1',
                'levelLinksPosition' => 'top',
                'showSynchronizationLink' => '1',
                'showAllLocalizationLink' => '1',
            ],
        ],
        'exclude' => '1',
        'l10n_mode' => 'copy',
        'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_marker',
    ],
    'tx_hh_openstreetmap_zoom' => [
        'displayCond' => 'FIELD:tx_hh_openstreetmap_map_fit:=:0',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 10,
            'items' => [
                0 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.0',
                    1 => '1',
                ],
                1 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.1',
                    1 => '2',
                ],
                2 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.2',
                    1 => '3',
                ],
                3 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.3',
                    1 => '4',
                ],
                4 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.4',
                    1 => '5',
                ],
                5 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.5',
                    1 => '6',
                ],
                6 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.6',
                    1 => '7',
                ],
                7 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.7',
                    1 => '8',
                ],
                8 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.8',
                    1 => '9',
                ],
                9 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.9',
                    1 => '10',
                ],
                10 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.10',
                    1 => '11',
                ],
                11 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.11',
                    1 => '12',
                ],
                12 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.12',
                    1 => '13',
                ],
                13 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.13',
                    1 => '14',
                ],
                14 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.14',
                    1 => '15',
                ],
                15 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.15',
                    1 => '16',
                ],
                16 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.16',
                    1 => '17',
                ],
                17 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.17',
                    1 => '18',
                ],
                18 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.18',
                    1 => '19',
                ],
                19 => [
                    0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom.I.19',
                    1 => '20',
                ],
            ],
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_zoom',
    ],
    'tx_hh_openstreetmap_height_desktop' => [
        'label' => 'Höhe der Map in px (Desktop)',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim,int',
            'range' => [
                'lower' => 100,
                'upper' => 1200,
            ],
            'default' => 500,
            'slider' => [
                'step' => 10,
                'width' => 200,
            ],
        ],
    ],
    'tx_hh_openstreetmap_height_tablet' => [
        'label' => 'Höhe der Map in px (tablet)',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim,int',
            'range' => [
                'lower' => 100,
                'upper' => 1200,
            ],
            'default' => 400,
            'slider' => [
                'step' => 10,
                'width' => 200,
            ],
        ],
    ],
    'tx_hh_openstreetmap_height_mobile' => [
        'label' => 'Höhe der Map in px (mobile)',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim,int',
            'range' => [
                'lower' => 100,
                'upper' => 1200,
            ],
            'default' => 250,
            'slider' => [
                'step' => 10,
                'width' => 200,
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._hh_openstreetmap_',
    '--div--',
];

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.CType.hh_openstreetmap_openstreetmap',
    'hh_openstreetmap_openstreetmap',
    'tx_hh_openstreetmap_openstreetmap',
];

$tempTypes = [
    'hh_openstreetmap_openstreetmap' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'richtextConfiguration' => 'default',
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                header_layout,
            --div--;Options,
                tx_hh_openstreetmap_zoom,
                tx_hh_openstreetmap_options_scrollWheelZoom,
                tx_hh_openstreetmap_map_fit,
                tx_hh_openstreetmap_map_lat,
                tx_hh_openstreetmap_map_long,
            --div--;Markers,
                tx_hh_openstreetmap_marker,
            --div--;Sizes,
                tx_hh_openstreetmap_height_desktop,
                tx_hh_openstreetmap_height_tablet,
                tx_hh_openstreetmap_height_mobile,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            --div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
                tx_gridelements_container,
                tx_gridelements_columns,
            --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;

<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tx_hh_openstreetmap_marker',
        'label' => 'tx_hh_openstreetmap_marker_text',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'tx_hh_openstreetmap_marker_text,tx_hh_openstreetmap_marker_lat,tx_hh_openstreetmap_marker_long',
        'dynamicConfigFile' => '',
        'iconfile' => 'EXT:hh_openstreetmap/Resources/Public/Icons/Extension.png',
        'hideTable' => true,
    ],
    'types' => [
        '1' => [
            'showitem' => '
                tx_hh_openstreetmap_marker_text,
                --palette--;Marker Position;marker_position,
                --palette--;Marker Options;marker_options,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access
            ',
        ],
    ],
    'palettes' => [
        'marker_position' => [
            'showitem' => 'tx_hh_openstreetmap_marker_lat,tx_hh_openstreetmap_marker_long',
        ],
        'marker_options' => [
            'showitem' => 'tx_hh_openstreetmap_marker_icon,tx_hh_openstreetmap_marker_openonstart',
        ],
        'language' => [
            'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource',
        ],
        'access' => [
            'showitem' => 'hidden',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    0 => [
                        0 => '',
                        1 => 0,
                    ],
                ],
                'foreign_table' => 'tx_hh_openstreetmap_marker',
                'foreign_table_where' => 'AND tx_hh_openstreetmap_marker.pid=###CURRENT_PID### AND tx_hh_openstreetmap_marker.sys_language_uid IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
                'renderType' => 'inputDateTime',
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
                'renderType' => 'inputDateTime',
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
            ],
        ],
        'parentid' => [
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    0 => [
                        0 => '',
                        1 => 0,
                    ],
                ],
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
            ],
        ],
        'parenttable' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'sorting' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'tx_hh_openstreetmap_marker_text' => [
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
                'richtextConfiguration' => 'default',
                'enableRichtext' => '1',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tx_hh_openstreetmap_marker.tx_hh_openstreetmap_marker_text',
        ],
        'tx_hh_openstreetmap_marker_lat' => [
            'config' => [
                'type' => 'input',
                'eval' => 'required,trim,nospace,is_in',
                'is_in' => '-0123456789.',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tx_hh_openstreetmap_marker.tx_hh_openstreetmap_marker_lat',
        ],
        'tx_hh_openstreetmap_marker_long' => [
            'config' => [
                'type' => 'input',
                'eval' => 'required,trim,nospace,is_in',
                'is_in' => '-0123456789.',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tx_hh_openstreetmap_marker.tx_hh_openstreetmap_marker_long',
        ],
        'tx_hh_openstreetmap_marker_icon' => [
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                // 'fileFolder' => 'fileadmin/hh_openstreetmap/icons/marker/',
                // 'fileFolder_extList' => 'png,jpg',
                // 'fileFolder_recursions' => 0,
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
                // 'items' => [
                //     ['Label', 'value', 'icon-path/absolute/but-not-public-path!'],
                // ],
                'itemsProcFunc' => 'HauerHeinrich\\HhOpenstreetmap\\UserFunc\\TcaProcFunc->markerIcons',
                'minitems' => 1,
                'maxitems' => 1
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tx_hh_openstreetmap_marker.tx_hh_openstreetmap_marker_icon',
        ],
        'tx_hh_openstreetmap_marker_openonstart' => [
            'config' => [
                'type' => 'check',
                'items' => [
                    0 => [
                        0 => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_marker_openonstart.I.0',
                    ],
                ],
                'default' => 0,
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:hh_openstreetmap/Resources/Private/Language/locallang_db.xlf:tt_content.tx_hh_openstreetmap_marker_openonstart',
        ],
    ],
];

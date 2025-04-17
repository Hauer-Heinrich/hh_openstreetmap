<?php
defined('TYPO3') || die('Access denied.');

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function(string $extensionKey) {
    // make PageTsConfig selectable
    ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/AllPage.tsconfig',
        "EXT:{$extensionKey} :: Hauer-Heinrich - OpenStreetMap Page TS"
    );
}, 'hh_openstreetmap');

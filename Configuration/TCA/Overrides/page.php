<?php
defined('TYPO3') || die('Access denied.');

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function() {
    $extensionKey = 'hh_openstreetmap';

    // make PageTsConfig selectable
    ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTsConfig/All.typoscript',
        "EXT:{$extensionKey} :: Hauer-Heinrich - OpenStreetMap Page TS"
    );
});

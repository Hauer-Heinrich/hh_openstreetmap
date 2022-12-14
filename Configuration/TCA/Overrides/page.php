<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {

    $extensionKey = 'hh_openstreetmap';

    // make PageTsConfig selectable
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTsConfig/All.typoscript',
        "EXT:{$extensionKey} :: Hauer-Heinrich - OpenStreetMap Page TS"
    );
});

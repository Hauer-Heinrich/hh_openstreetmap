<?php
defined('TYPO3') || die('Access denied.');

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function() {
    ExtensionManagementUtility::allowTableOnStandardPages('tx_hh_openstreetmap_marker');
});

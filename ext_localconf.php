<?php
defined('TYPO3') || die('Access denied.');

call_user_func(function() {
    // Register content element icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'tx_hh_openstreetmap_openstreetmap',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        [
            'source' => 'EXT:hh_openstreetmap/Resources/Public/Icons/Content/openstreetmap.png',
        ]
    );

    // Hooks
    // Add backend preview hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['hh_openstreetmap'] =
        HauerHeinrich\HhOpenstreetmap\Hooks\PageLayoutViewDrawItem::class;
});

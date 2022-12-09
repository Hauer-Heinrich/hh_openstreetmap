<?php
namespace HauerHeinrich\HhOpenstreetmap\UserFunc;

// use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Backend\Utility\BackendUtility;
use \TYPO3\CMS\Core\Resource\ResourceFactory;

class TcaProcFunc {

    /**
     * @param array $config
     * @return array
     */
    public function markerIcons(array &$config) {
        // Get current selected page from pageTree
        $selectedPageId = GeneralUtility::_GET('id');
        $rootPageId = 1;

        foreach (array_reverse(BackendUtility::BEgetRootLine($selectedPageId)) as $value) {
            if($value['is_siteroot'] === 1) {
                $rootPageId = $value['uid'];
                break;
            }
        }

        $pageTsConfig = BackendUtility::getPagesTSconfig($rootPageId)['tx_openstreetmap.'];

        $directoryFull = $pageTsConfig['settings.']['markerIconPath'];

        // make it possible to use storageIdentifier in constants like "1:user_upload/..." or "fileadmin/user_upload/..."
        $resourceFactory = GeneralUtility::makeInstance(ResourceFactory::class);
        if (strpos($directoryFull, ':') !== false) {
            $directoryStorageID = explode(':', $directoryFull);
            $defaultStorage = $resourceFactory->getStorageObject($directoryStorageID[0]);
            $folder = $defaultStorage->getFolder($directoryStorageID[1]);
        } else {
            $directory = explode('fileadmin', $directoryFull);
            $defaultStorage = $resourceFactory->getDefaultStorage();
            $folder = $defaultStorage->getFolder($directory[1]);
        }
        $files = $defaultStorage->getFilesInFolder($folder);

        foreach($files as $file) {
            $config['items'][] = [
                $file->getName(),
                $file->getPublicUrl(),
                // "/".$directoryFull.$file->getName(),
                $file->getForLocalProcessing(false)
            ];
        }
    }
}

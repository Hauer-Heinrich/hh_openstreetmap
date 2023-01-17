<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "hh_openstreetmap".
 *
 * Auto generated 28-08-2018 11:22
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['hh_openstreetmap'] = [
    'title' => 'Hauer-Heinrich - OSM OpenStreetMap',
    'description' => 'Simple OpenStreetMap',
    'category' => 'fe',
    'author' => 'Christian Hackl',
    'author_email' => 'chackl@hauer-heinrich.de',
    'author_company' => 'Werbeagentur Hauer-Heinrich.de',
    'state' => 'stable',
    'version' => '0.2.6',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HauerHeinrich\\HhOpenstreetmap\\' => 'Classes'
        ],
    ],
];

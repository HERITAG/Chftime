<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Cultural Heritage Framework: Time',
    'description' => 'Time component of the cultural heritage framework',
    'category' => 'plugin',
    'author' => 'Torsten Schrade',
    'author_email' => 'Torsten.Schrade@adwmainz.de',
    'author_company' => 'Academy of Sciences and Literature | Mainz',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '1',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.1.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.7.99',
            'chf_geo' => '',
            'vocabulary' => '',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);

<?php

/**
 * Extension Manager/Repository config file for ext "huda".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'huda',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Huad\\Huda\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'https://github.com/HudaSab/first package',
    'author_email' => 'joe@joe.com',
    'author_company' => 'huad',
    'version' => '1.0.0',
];

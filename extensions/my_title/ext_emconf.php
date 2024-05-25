<?php

/**
 * Extension Manager/Repository config file for ext "my_title".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'my title',
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
            'Timti\\MyTitle\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'tim tim',
    'author_email' => 'tim26618@gmail.com',
    'author_company' => 'timti',
    'version' => '1.0.0',
];

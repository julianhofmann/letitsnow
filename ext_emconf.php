<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Let it snow',
    'description' => 'Spreads a bit of wintry vibes for the visitors of the website sitting on the sofa.',
    'version' => '1.0.0',
    'category' => 'frontend',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.1.99',
            'typo3' => '11.5.4-11.5.99',
            'frontend' => '11.5.4-11.5.99',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'author' => 'Julian Hofmann',
    'author_email' => 'info@julian-hofmann.net',
    'autoload' => [
        'psr-4' => [
            'Xitnelat\\LetItSnow\\' => 'Classes/',
        ],
    ],
    'autoload-dev' => [
        'psr-4' => [
            'Xitnelat\\LetItSnow\\Tests\\' => 'Tests/',
        ],
    ],
];

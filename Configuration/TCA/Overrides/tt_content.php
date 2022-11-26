<?php

defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'LetItSnow',
    'LetItSnow',
    'LLL:EXT:letitsnow/Resources/Private/Language/locallang.xlf:plugin.letitsnow_index',
    'EXT:letitsnow/Resources/Public/Icons/Extension.svg'
);

// This removes the default controls from the plugin.
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'] = array_merge(
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'] ?? [],
    [
    'letitsnow_letitsnow' => 'recursive,select_key,pages',
]
);

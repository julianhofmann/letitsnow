<?php

defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'letitsnow',
    'Configuration/TypoScript',
    'Let it snow: Plugin'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'letitsnow',
    'Configuration/TypoScript/Frontend/',
    'Let it snow: Global'
);

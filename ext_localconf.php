<?php

defined('TYPO3') or die('Access denied.');

(static function (): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'LetItSnow',
        'LetItSnow',
        [
            \Xitnelat\LetItSnow\Controller\SnowController::class => 'index',
        ],
        [
            \Xitnelat\LetItSnow\Controller\SnowController::class => '',
        ]
    );
})();

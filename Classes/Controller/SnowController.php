<?php

declare(strict_types=1);

namespace Xitnelat\LetItSnow\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for the main "Let it snow" FE plugin.
 */
class SnowController extends ActionController
{
    public function indexAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }
}

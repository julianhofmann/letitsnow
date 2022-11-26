<?php

declare(strict_types=1);

namespace Xitnelat\LetItSnow\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\CMS\Core\Http\HtmlResponse;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Fluid\View\TemplateView;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use Xitnelat\LetItSnow\Controller\SnowController;

/**
 * @covers \Xitnelat\LetItSnow\Controller\TeaController
 */
class SnowControllerTest extends UnitTestCase
{
    /**
     * @var SnowController&MockObject&AccessibleObjectInterface
     */
    private SnowController $subject;

    /**
     * @var TemplateView&MockObject
     */
    private TemplateView $viewMock;

    protected function setUp(): void
    {
        parent::setUp();

        // We need to create an accessible mock in order to be able to set the protected `view`.
        $this->subject = $this->getAccessibleMock(
            SnowController::class,
            ['forward', 'redirect', 'redirectToUri', 'htmlResponse']
        );

        $this->viewMock = $this->createMock(TemplateView::class);
        $this->subject->_set('view', $this->viewMock);

        $responseMock = $this->createMock(HtmlResponse::class);
        $this->subject->method('htmlResponse')->willReturn($responseMock);
    }

    /**
     * @test
     */
    public function isActionController(): void
    {
        self::assertInstanceOf(ActionController::class, $this->subject);
    }
}

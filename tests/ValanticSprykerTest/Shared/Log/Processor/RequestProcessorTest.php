<?php

declare(strict_types = 1);

namespace ValanticSprykerTest\Shared\Log\Processor;

use Codeception\Test\Unit;
use Spryker\Shared\Config\Config;
use Spryker\Shared\Log\Sanitizer\SanitizerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use ValanticSpryker\Shared\Log\Processor\RequestProcessor;
use ValanticSpryker\Shared\SearchElasticsearch\ElasticaClient\ElasticaClientFactory;
use ValanticSpryker\Zed\SearchElasticsearch\Business\SearchElasticsearchBusinessFactory;

/**
 * Auto-generated group annotations
 *
 * @group ValanticSprykerTest
 * @group Glue
 * @group UrlsRestApi
 * Add your own group annotations below this line
 */
class RequestProcessorTest extends Unit
{
  /**
   * @var
   */
    protected $businessFactory;

  /**
   * @return void
   */
    protected function _before(): void
    {
        parent::_before();
    }

  /**
   * @return void
   */
    public function testCreateElasticsearchClientFactory(): void
    {
        $santitizerMock = $this->createMock(SanitizerInterface::class);
        $businessFactory = new RequestProcessor($santitizerMock);
        $this->assertIsArray($businessFactory->getData([RequestProcessor::RECORD_CONTEXT => 'unit-test']));
    }
}

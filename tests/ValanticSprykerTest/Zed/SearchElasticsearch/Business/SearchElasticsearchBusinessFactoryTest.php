<?php

declare(strict_types = 1);

namespace ValanticSprykerTest\Zed\SearchElasticsearch\Business;

use Codeception\Test\Unit;
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
class SearchElasticsearchBusinessFactoryTest extends Unit
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
        $this->businessFactory = new SearchElasticsearchBusinessFactory();

        $this->assertInstanceOf(ElasticaClientFactory::class, $this->businessFactory->createElasticsearchClientFactory());
    }
}

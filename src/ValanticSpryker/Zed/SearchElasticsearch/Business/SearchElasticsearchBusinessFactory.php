<?php

declare(strict_types = 1);

namespace ValanticSpryker\Zed\SearchElasticsearch\Business;

use ValanticSpryker\Shared\SearchElasticsearch\ElasticaClient\ElasticaClientFactory;
use Spryker\Shared\SearchElasticsearch\ElasticaClient\ElasticaClientFactoryInterface;
use Spryker\Zed\SearchElasticsearch\Business\SearchElasticsearchBusinessFactory as SprykerSearchElasticsearchBusinessFactory;

/**
 * @method \Spryker\Zed\SearchElasticsearch\SearchElasticsearchConfig getConfig()
 */
class SearchElasticsearchBusinessFactory extends SprykerSearchElasticsearchBusinessFactory
{
    /**
     * @return \Spryker\Shared\SearchElasticsearch\ElasticaClient\ElasticaClientFactoryInterface
     */
    public function createElasticsearchClientFactory(): ElasticaClientFactoryInterface
    {
        return new ElasticaClientFactory();
    }
}

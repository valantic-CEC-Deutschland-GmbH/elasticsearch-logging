<?php

declare(strict_types = 1);

namespace ValanticSpryker\Shared\SearchElasticsearch\ElasticaClient;

use Elastica\Client;
use Spryker\Shared\Log\LoggerTrait;
use Spryker\Shared\SearchElasticsearch\ElasticaClient\ElasticaClientFactory as SprykerElasticaClientFactory;

class ElasticaClientFactory extends SprykerElasticaClientFactory
{
    use LoggerTrait;

    /**
     * @var \Elastica\Client
     */
    protected static $client;

    /**
     * @param array $clientConfig
     *
     * @return \Elastica\Client
     */
    public function createClient(array $clientConfig): Client
    {
        if (static::$client === null) {
            static::$client = (new Client($clientConfig, null, $this->getLogger()));
        }

        return static::$client;
    }
}

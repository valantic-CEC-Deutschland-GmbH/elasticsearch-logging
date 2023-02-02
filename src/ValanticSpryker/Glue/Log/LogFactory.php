<?php

declare(strict_types = 1);

namespace ValanticSpryker\Glue\Log;

use Monolog\Formatter\FormatterInterface;
use Spryker\Glue\Log\LogFactory as SprykerLogFactory;
use Spryker\Shared\Log\Processor\ProcessorInterface;
use ValanticSpryker\Shared\Log\Processor\RequestProcessor;
use ValanticSpryker\Zed\Log\Communication\Formatter\LogstashFormatter;

/**
 * @method \ValanticSpryker\Glue\Log\LogConfig getConfig()
 */
class LogFactory extends SprykerLogFactory
{
    /**
     * @return \Spryker\Shared\Log\Processor\ProcessorInterface
     */
    public function createRequestProcessor(): ProcessorInterface
    {
        return new RequestProcessor($this->createSanitizer());
    }

    /**
     * @return \Monolog\Formatter\FormatterInterface
     */
    public function createLogstashFormatter(): FormatterInterface
    {
        return new LogstashFormatter(APPLICATION, null, 'extra', 'context', $this->getConfig()->getMaxNormalizeDepth());
    }
}

<?php

declare(strict_types = 1);

namespace ValanticSpryker\Zed\Log\Communication;

use Monolog\Formatter\FormatterInterface;
use ValanticSpryker\Zed\Log\Communication\Formatter\LogstashFormatter;
use Spryker\Zed\Log\Communication\LogCommunicationFactory as SprykerLogCommunicationFactory;

/**
 * @method \Spryker\Zed\Log\Business\LogFacadeInterface getFacade()
 * @method \ValanticSpryker\Zed\Log\LogConfig getConfig()
 */
class LogCommunicationFactory extends SprykerLogCommunicationFactory
{
    /**
     * @return \Monolog\Formatter\FormatterInterface
     */
    protected function createLogstashFormatter(): FormatterInterface
    {
        return new LogstashFormatter(APPLICATION, null, 'extra', 'context', $this->getConfig()->getMaxNormalizeDepth());
    }
}

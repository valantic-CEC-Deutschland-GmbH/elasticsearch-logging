<?php

declare(strict_types = 1);

namespace ValanticSpryker\Yves\Log;

use Monolog\Formatter\FormatterInterface;
use Spryker\Shared\Log\Processor\ProcessorInterface;
use Spryker\Yves\Log\LogFactory as SprykerLogFactory;
use ValanticSpryker\Shared\Log\Processor\RequestProcessor;
use ValanticSpryker\Yves\Log\Communication\Formatter\LogstashFormatter;

/**
 * @method \ValanticSpryker\Yves\Log\LogConfig getConfig()
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
    protected function createLogstashFormatter(): FormatterInterface
    {
        return new LogstashFormatter(APPLICATION, null, 'extra', 'context', $this->getConfig()->getMaxNormalizeDepth());
    }
}

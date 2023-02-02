<?php

namespace ValanticSpryker\Yves\Log;

use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\LogstashFormatter;
use Spryker\Shared\Log\Processor\ProcessorInterface;
use Spryker\Yves\Log\LogFactory as SprykerLogFactory;
use ValanticSpryker\Shared\Log\Processor\RequestProcessor;

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

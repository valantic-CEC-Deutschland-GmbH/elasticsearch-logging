<?php

namespace ValanticSpryker\Yves\Log;

use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\LogstashFormatter;
use Spryker\Yves\Log\LogFactory as SprykerLogFactory;

class LogFactory extends SprykerLogFactory
{
  /**
   * @return \Monolog\Formatter\FormatterInterface
   */
  protected function createLogstashFormatter(): FormatterInterface
  {
    return new LogstashFormatter(APPLICATION, null, 'extra', 'context', $this->getConfig()->getMaxNormalizeDepth());
  }
}

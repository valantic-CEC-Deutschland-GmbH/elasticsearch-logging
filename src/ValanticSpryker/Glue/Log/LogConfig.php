<?php

declare(strict_types = 1);

namespace ValanticSpryker\Glue\Log;

use ValanticSpryker\Shared\Log\LogConstants;
use Spryker\Glue\Log\LogConfig as SprykerLogConfig;

class LogConfig extends SprykerLogConfig
{
    /**
     * @return int
     */
    public function getMaxNormalizeDepth(): int
    {
        return $this->get(LogConstants::MAX_NORMALIZE_DEPTH, 9);
    }
}

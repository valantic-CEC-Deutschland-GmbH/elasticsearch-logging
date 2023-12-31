<?php

declare(strict_types = 1);

namespace ValanticSpryker\Zed\Log;

use Spryker\Zed\Log\LogConfig as SprykerLogConfig;
use ValanticSpryker\Shared\Log\LogConstants;

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

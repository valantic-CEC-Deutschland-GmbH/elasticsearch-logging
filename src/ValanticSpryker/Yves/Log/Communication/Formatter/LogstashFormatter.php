<?php

declare(strict_types = 1);

namespace ValanticSpryker\Yves\Log\Communication\Formatter;

use Monolog\Formatter\LogstashFormatter as MonologLogstashFormatter;

class LogstashFormatter extends MonologLogstashFormatter
{
    /**
     * @param string $applicationName
     * @param string|null $systemName
     * @param string $extraKey
     * @param string $contextKey
     * @param int $maxNormalizeDepth
     */
    public function __construct(string $applicationName, ?string $systemName = null, string $extraKey = 'extra', string $contextKey = 'context', int $maxNormalizeDepth = 9)
    {
        parent::__construct($applicationName, $systemName, $extraKey, $contextKey);
        $this->setMaxNormalizeDepth($maxNormalizeDepth);
    }
}

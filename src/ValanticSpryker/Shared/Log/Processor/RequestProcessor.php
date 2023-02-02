<?php

declare(strict_types = 1);

namespace ValanticSpryker\Shared\Log\Processor;

use Spryker\Service\UtilNetwork\UtilNetworkService;
use Spryker\Shared\Log\Processor\RequestProcessor as SprykerRequestProcessor;
use Symfony\Component\HttpFoundation\Request;

class RequestProcessor extends SprykerRequestProcessor
{
    /**
     * @param array $record
     *
     * @return array
     */
    public function getData(array $record): array
    {
        $request = $this->findRequest((array)$record[static::RECORD_CONTEXT]);
        if ($request instanceof Request && $request->getSession() !== null) {
            $utilNetworkService = new UtilNetworkService();
            $fields = [
                static::REQUEST_ID => $utilNetworkService->getRequestId(),
                static::REQUEST_TYPE => $this->getSapi(),
                static::REQUEST_PARAMS => $this->getRequestParams(),
            ];

            $this->addSessionId($request, $fields);
            $this->addUsername($request, $fields);

            return $fields;
        }

        return $record;
    }
}

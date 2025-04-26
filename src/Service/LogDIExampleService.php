<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class LogDIExampleService
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {

        $this->logger = $logger;
    }

    public function logInfo(string $message)
    {
        $this->logger->info($message);
    }

}
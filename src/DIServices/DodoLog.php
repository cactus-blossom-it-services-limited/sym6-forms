<?php

namespace App\DIServices;

use Psr\Log\LoggerInterface;

class DodoLog
{
    public function __construct(
        private LoggerInterface $logdodo,
    )
    {
    }

    public function dodoLog()
    {
        $this->logdodo->info('This is a log entry!');
    }

}
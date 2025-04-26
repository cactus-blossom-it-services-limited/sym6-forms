<?php

namespace App\DIServices;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\Service\Attribute\Required;

class PissLog
{
    private LoggerInterface $pissLog;

    /**
     * @return static
     */
    #[Required]
    public function withLogger(LoggerInterface $pissLog): self
    {
        $new = clone $this;
        $new->pissLog = $pissLog;

        return $new;
    }

}
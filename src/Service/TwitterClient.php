<?php

namespace App\Service;

use App\Util\Rot13Transformer;
use App\Entity\User;

class TwitterClient
{
    public function __construct(
        private Rot13Transformer $transformer,
    )
    {
    }

    public function tweet(User $user, string $key, string $status): void
    {
        $transformedStatus = $this->transformer->transform($status);
    }

}
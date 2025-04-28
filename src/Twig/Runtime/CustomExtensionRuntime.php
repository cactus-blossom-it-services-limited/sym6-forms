<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class CustomExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function maskPhoneNumber($phone_number, $digits_to_mask=7)
    {
        if (preg_match('/^\d{10}$/', $phone_number)) {
            $digits_to_mask = min($digits_to_mask, 9);
            $masked_part = str_repeat('*', $digits_to_mask);
            $visible_part = substr($phone_number, $digits_to_mask);
            return $masked_part . $visible_part;
        }
        return $phone_number;
    }
}

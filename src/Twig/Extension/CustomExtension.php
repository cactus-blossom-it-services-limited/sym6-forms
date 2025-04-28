<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\CustomExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class CustomExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
            new TwigFilter('mask_phone', [CustomExtensionRuntime::class, 'maskPhoneNumber']),
        ];
    }
}

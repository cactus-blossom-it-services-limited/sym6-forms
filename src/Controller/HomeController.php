<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController
{
    #[Route("/{page<\d+>}", name: "app_homepage")]
    public function homepage(int $page = 1)
    {
        return new Response(
            '<html><body>This is New Cross Gate\'s home page!</body></html>'
        );
    }
}
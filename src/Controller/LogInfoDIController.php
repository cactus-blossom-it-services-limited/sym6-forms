<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LogInfoDIController extends AbstractController
{
    #[Route('/log', name: 'app_log')]
    public function logInfo(LoggerInterface $pissLog): Response
    {
        $pissLog->info('This is the piss log!');

        return new Response('Piss log written!');
    }
}

<?php

namespace App\Controller;

use App\Service\LogDIExampleService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LogInfoDIController extends AbstractController
{
    #[Route('/log', name: 'app_log')]
    public function logInfo(LogDIExampleService $logService): Response
    {
        $logService->logInfo('This is a log message from Service - Constructor Injection!');

        return new Response('Log written!');
    }
}

<?php

namespace App\Controller;

use App\DIServices\DodoLog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LogInfoDIController extends AbstractController
{
    #[Route('/log', name: 'app_log')]
    public function logInfo(DodoLog $logDodo): Response
    {
        $logDodo->dodoLog();

        return new Response('Log written!');
    }
}

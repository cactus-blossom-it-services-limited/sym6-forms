<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TwigPlayController extends AbstractController
{
    #[Route("/twig/play", name: "app_twig_play")]
    public function twigPlay(): Response
    {
        return $this->render('play.html.twig'
        );
    }
}
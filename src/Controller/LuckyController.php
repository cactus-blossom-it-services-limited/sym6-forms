<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
class LuckyController extends AbstractController
{
    #[Route('/lucky/number/{max}', name: 'app_lucky_number')]
    public function number(int $max = 5): Response
    {
        $number = rand(0, $max);

        return $this->render('lucky/lucky_number.html.twig', [
            'number' => $number,
        ]);
    }

    #[Route('/redirect-to-lucky', name: 'app_redirect-lucky')]
    public function luckyRedirect(): RedirectResponse
    {
        return $this->redirectToRoute('app_lucky_number', ['max' => 8]);
    }

    #[Route('/symfony', name: 'app_redirect-docs')]
    public function luckyRedirectDocs(): RedirectResponse
    {
        // redirects externally
        return $this->redirect('http://symfony.com/doc');
    }

    #[Route('/lucky-query-params', name: 'app_redirect-query-params')]
    public function luckyRedirectParams(Request $request): RedirectResponse
    {
        // redirects to a route and maintains the original query parameters
        return $this->redirectToRoute('app_lucky_number', $request->query->all());
    }
}

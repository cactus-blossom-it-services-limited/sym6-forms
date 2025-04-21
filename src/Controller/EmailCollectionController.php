<?php

namespace App\Controller;

use App\Form\EmailCollectionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EmailCollectionController extends AbstractController
{
    #[Route('/email', name: 'app_email_collection')]
    public function index(): Response
    {
        $emails = [
            'john.doe@example.com',
            'jane.doe@example.com',
            'jane.doe@example.com',
        ];

        $form = $this->createForm(EmailCollectionType::class, $emails);
        return $this->render('email_collection/email_collection.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

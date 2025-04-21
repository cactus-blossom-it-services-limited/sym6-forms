<?php

namespace App\Controller;

use App\Entity\NewCrossStudent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewCrossStudentController extends AbstractController
{
    #[Route('/ncs', name: 'app_ncs')]
    public function index(): Response
    {
        // Creates a NewCrossStudent object and initializes some data
        $newCrossStudent = new NewCrossStudent();
        $newCrossStudent->setCountry('United Kingdom');

        $form = $this->createFormBuilder($newCrossStudent)
            ->add('country', CountryType::class)
            ->add('save', SubmitType::class, ['label' => 'Create NCStudent'])
            ->getForm()
            ;

        return $this->render('new_cross_student/index.html.twig', [
            'form' => $form,
        ]);
    }
}

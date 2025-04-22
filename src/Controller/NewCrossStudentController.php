<?php

namespace App\Controller;

use App\Entity\NewCrossStudent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewCrossStudentController extends AbstractController
{
    #[Route('/ncs', name: 'app_ncs')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Creates a NewCrossStudent object and initializes some data
        $newCrossStudent = new NewCrossStudent();

        $form = $this->createFormBuilder($newCrossStudent)
            ->add('country', CountryType::class)
            ->add('total_brain_cells', NumberType::class, ['scale' => 2, 'rounding_mode' => \NumberFormatter::ROUND_HALFUP])
            ->add('average_mark', PercentType::class)
            ->add('annual_mortgage', MoneyType::class, ['currency' => 'EUR'])
            ->add('save', SubmitType::class, ['label' => 'Create NCStudent'])
            ->getForm()
            ;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($newCrossStudent);
            $entityManager->flush();
            return $this->redirectToRoute('app_task');
        }

        return $this->render('new_cross_student/index.html.twig', [
            'form' => $form,
        ]);
    }
}

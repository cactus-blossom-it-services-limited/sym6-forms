<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'create_product')]
    public function createProduct(EntityManagerInterface $entityManager, TranslatorInterface $translator): Response
    {
        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(1999);
        $product->setDescription('Ergonomic and stylish!');
        $product->setCategory('electrical');

        // indicate you want to eventually save Product but no queries yet
        $entityManager->persist($product);

        // actually executes the queries i.e. the INSERT query
        $entityManager->flush();

//        $translated = $translator->trans("Enregistrement d'un nouveau produit avec l'id ");
        $translated = $translator->trans('Saved new product with id ');
        return new Response($translated .$product->getId());
    }
}

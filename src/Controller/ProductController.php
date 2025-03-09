<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends AbstractController
{
    #[Route('/{_locale}/product',
        name: 'create_product',
        requirements: [
            '_locale' => 'en|fr',
            ],
    )]
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

        $translated = $translator->trans('Saved new product with id');
        return new Response($translated. ' ' .$product->getId());
    }

    #[Route('/product', name: 'product_redirect')]
    public function productRedirect(): RedirectResponse
    {
        // redirects to the "create_product" route
        return $this->redirectToRoute('create_product');
    }
}

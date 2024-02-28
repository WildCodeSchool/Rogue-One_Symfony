<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ProductRepository $productRepository): Response
    {
        // Récupérer le dernier produit ajouté
        $latestProduct = $productRepository->createQueryBuilder('p')
        ->orderBy('p.id', 'DESC')
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();

        return $this->render(
            'home/index.html.twig',
            ['pageName' => "Page d'accueil", 'pageDescription' => "home",'latestProduct' => $latestProduct,]
        );
    }
}

<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(ProductRepository $productRepository): Response
    {
        $tableName = Product::class;
        $products = $productRepository->findAll();
        return $this->render(
            'admin/admin.html.twig',
            [
                'pageName' => 'Page Administrateur',
                'tableName' => $tableName,
                'products' => $products,
            ]
        );
    }
}

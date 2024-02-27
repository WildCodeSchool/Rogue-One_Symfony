<?php

namespace App\Controller;

use App\Entity\Product; 
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(ProductRepository $productRepository): Response
    {
        $entityName = Product::class;
        $products = $productRepository->findAll();
        return $this->render('admin_dashboard/index.html.twig', ['pageName' => "Page Administrateur", 'entityName' => $entityName,'products' => $products]);
    }
}

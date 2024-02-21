<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/product', name: 'app_product_')]
class ProductController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'index')]
    public function index(Request $request): Response
    {
        $categories = $this->entityManager->getRepository(Category::class)->findAll();
        $products = $this->entityManager->getRepository(Product::class)->findAll();

        $productsPerPage = 10;
        $totalproducts = count($products);
        $pagesNumber = ceil($totalproducts / $productsPerPage);

        $page = $request->query->getInt('page', 1);

        return $this->render('product/index.html.twig', [
            'pageName' => "Nos Mocktails",
            'categories' => $categories,
            'products' => $products,
            'pagesNumber' => $pagesNumber,
            'currentPage' => $page,
        ]);
    }
}

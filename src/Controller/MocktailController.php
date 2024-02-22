<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/mocktail', name: 'app_mocktail_')]
class MocktailController extends AbstractController
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
        $mocktails = $this->entityManager->getRepository(Product::class)->findAll();

        $mocktailsPerPage = 10;
        $totalMocktails = count($mocktails);
        $pagesNumber = ceil($totalMocktails / $mocktailsPerPage);

        $page = $request->query->getInt('page', 1);

        return $this->render('mocktail/index.html.twig', [
            'pageName' => "Nos Mocktails",
            'categories' => $categories,
            'mocktails' => $mocktails,
            'pagesNumber' => $pagesNumber,
            'currentPage' => $page,
        ]);
    }

    #[Route('/show', name: 'show')]
    public function show(): Response
    {
        return $this->render('mocktail/show.html.twig');
    }
}

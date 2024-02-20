<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/mocktail', name: 'app_mocktail')]
class MocktailController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'pageName' => "Nos Mocktails",
        ]);
    }

    #[Route('/show', name: 'show')]
    public function show(): Response
    {
        return $this->render('show.html.twig');
    }
}

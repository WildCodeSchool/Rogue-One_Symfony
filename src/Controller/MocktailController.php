<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MocktailController extends AbstractController
{
    #[Route('/mocktail', name: 'app_mocktail')]
    public function index(): Response
    {
        return $this->render('mocktail/index.html.twig', [
            'pageName' => "Nos Mocktails",
        ]);
    }
}

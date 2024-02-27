<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminEmailController extends AbstractController
{
    #[Route('/admin/email', name: 'app_admin_email')]
    public function index(): Response
    {
        return $this->render(
            'admin_email/index.html.twig',
            ['pageName' => "Page d'email", 'pageDescription' => "email",]
        );
    }
}

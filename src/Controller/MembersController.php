<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MembersController extends AbstractController
{
    #[Route('/members', name: 'app_members')]
    public function index(): Response
    {
        // $members = $membersManager->selectAll();
        return $this->render('members/index.html.twig', [
            'controller_name' => 'MembersController',  'pageName' => "Notre équipe"
        ]);
    }
}

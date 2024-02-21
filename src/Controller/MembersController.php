<?php

namespace App\Controller;

use App\Repository\MembersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MembersController extends AbstractController
{
    #[Route('/members', name: 'app_members')]
    public function index(MembersRepository $membersRepository): Response
    {
        // Récupérer tous les membres
        $members = $membersRepository->findAll();

        return $this->render('members/index.html.twig', [
            'pageName' => "Notre équipe",
            'members' => $members,
        ]);
    }
}

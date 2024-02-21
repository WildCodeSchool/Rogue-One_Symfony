<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Member;
use App\Repository\MemberRepository; // Import MemberRepository
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController
{
    #[Route('/member', name: 'app_member')]
    public function index(MemberRepository $memberRepository): Response // Inject MemberRepository
    {
        // Récupérer tous les membres
        $members = $memberRepository->findAll(); // Use $memberRepository to fetch members

        return $this->render('member/index.html.twig', [
            'pageName' => "Notre équipe",
            'member' => $members, // Pass $members to the template
        ]);
    }
}

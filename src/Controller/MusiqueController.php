<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MusiqueController extends AbstractController
{
    #[Route('/musique', name: 'app_musique')]
    public function index(): Response
    {
        return $this->render('musique/index.html.twig', [
            'controller_name' => 'MusiqueController',
        ]);
    }

    #[Route('/musique/programmation', name: 'app_musique_prog')]
    public function progMusique(): Response
    {
        return $this->render('musique/programmation-musique.html.twig', [
            'controller_name' => 'SportsController',
        ]);
    }
}

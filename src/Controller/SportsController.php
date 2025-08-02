<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SportsController extends AbstractController
{
    #[Route('/sports', name: 'app_sports')]
    public function index(): Response
    {
        return $this->render('sports/index.html.twig', [
            'controller_name' => 'SportsController',
        ]);
    }

    #[Route('/sports/programmation', name: 'app_sports_prog')]
    public function progSports(): Response
    {
        return $this->render('sports/programmation-sports.html.twig', [
            'controller_name' => 'SportsController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AgricultureController extends AbstractController
{
    #[Route('/agriculture', name: 'app_agriculture')]
    public function index(): Response
    {
        return $this->render('agriculture/index.html.twig', [
            'controller_name' => 'AgricultureController',
        ]);
    }

    #[Route('/agri/programmation', name: 'app_agri_prog')]
    public function progAgri(): Response
    {
        return $this->render('agriculture/programmation-agri.html.twig', [
            'controller_name' => 'SportsController',
        ]);
    }
}

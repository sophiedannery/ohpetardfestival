<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AnimationsController extends AbstractController
{
    #[Route('/animations', name: 'app_animations')]
    public function index(): Response
    {
        return $this->render('animations/index.html.twig', [
            'controller_name' => 'AnimationsController',
        ]);
    }

    #[Route('/animations/programmation', name: 'app_anim_prog')]
    public function progAnim(): Response
    {
        return $this->render('animations/programmation-animations.html.twig', [
            'controller_name' => 'SportsController',
        ]);
    }
}

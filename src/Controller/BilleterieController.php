<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BilleterieController extends AbstractController
{
    #[Route('/billeterie', name: 'app_billeterie')]
    public function index(): Response
    {
        return $this->render('billeterie/billeterie.html.twig', [
            'controller_name' => 'BilleterieController',
        ]);
    }
}

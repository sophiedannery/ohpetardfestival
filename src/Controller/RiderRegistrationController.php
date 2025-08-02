<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RiderRegistrationController extends AbstractController
{
    #[Route('/rider/registration', name: 'app_rider_registration')]
    public function inscription(): Response
    {
        return $this->render('riders-inscription/inscription.html.twig', [
            'controller_name' => 'RiderRegistrationController',
        ]);
    }

    #[Route('/rider/inscription/dh', name: 'app_inscription_dh')]
    public function dh(): Response
    {
        return $this->render('riders-inscription/inscription-dh.html.twig', [
            'controller_name' => 'RiderRegistrationController',
        ]);
    }

    #[Route('/rider/inscription/bloc', name: 'app_inscription_bloc')]
    public function bloc(): Response
    {
        return $this->render('riders-inscription/inscription-bloc.html.twig', [
            'controller_name' => 'RiderRegistrationController',
        ]);
    }
}

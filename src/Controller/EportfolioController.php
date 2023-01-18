<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EportfolioController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('eportfolio/index.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
	
    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('eportfolio/cv.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
	
    #[Route('/eportfolio', name: 'eportfolio')]
    public function eportfolio(): Response
    {
        return $this->render('eportfolio/eportfolio.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
	
    #[Route('/savoir', name: 'savoir_plus')]
    public function savoir(): Response
    {
        return $this->render('eportfolio/savoir.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/formulaire_cv', name: 'formulaire_cv')]
    public function formulaire(): Response
    {
        return $this->render('eportfolio/formulaire_cv.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
}

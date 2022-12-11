<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalleControleController extends AbstractController
{
    #[Route('/salle/controle', name: 'app_salle_controle')]
    public function index(): Response
    {
        return $this->render('salle_controle/index.html.twig', [
            'controller_name' => 'SalleControleController',
        ]);
    }
}
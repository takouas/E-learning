<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainingController extends AbstractController
{
    
    /**
     * @Route("/training", name="training_online", methods={"GET"})
     */
    public function training_online(): Response
    {
        return New RedirectResponse('http://localhost:3000/dashboard');
    }
}

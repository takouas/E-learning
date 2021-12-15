<?php

namespace App\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeHController extends AbstractController
{
   
    /**
     * @Route("/homeH", name="app_homepage", stateless=true)
     */
    public function index(): Response
    {
        return $this->render('home/Home/index.html.twig');
    }
}

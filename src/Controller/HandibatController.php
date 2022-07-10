<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HandibatController extends AbstractController
{
    /**
     * @Route("/handibat", name="handibat")
     */
    public function index(): Response
    {
        return $this->render('handibat/index.html.twig', [
            'controller_name' => 'HandibatController',
        ]);
    }
}

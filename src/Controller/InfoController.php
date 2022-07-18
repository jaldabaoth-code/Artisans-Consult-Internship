<?php

namespace App\Controller;

use App\Repository\PartnerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InfoController extends AbstractController
{
    /**
     * @Route("/infos", name="infos")
     */
    public function index(PartnerRepository $partnerRepository): Response
    {
        $partners = $partnerRepository->findBy([
            'category' => 'public'
        ]);
        return $this->render('info/index.html.twig', ['partners' => $partners,]);
    }
}

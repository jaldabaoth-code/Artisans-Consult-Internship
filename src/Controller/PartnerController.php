<?php

namespace App\Controller;

use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartnerController extends AbstractController
{
    /**
     * @Route("/partenaires", name="partner")
     */
    public function index(PartnerRepository $partnerRepository): Response
    {
        $partners = $partnerRepository->findBy([
            'category' => 'private'
        ]);
        return $this->render('partner/index.html.twig', [
            'partners' => $partners,
        ]);
    }
}

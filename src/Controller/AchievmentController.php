<?php

namespace App\Controller;

use App\Repository\PictureRepository;
use App\Repository\AchievmentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AchievmentController extends AbstractController
{
    /**
     * @Route("/realisations", name="achievment")
     */
    public function index(AchievmentRepository $achievmentRepository, PictureRepository $picturesRepository, Request $request): Response
    {
        $limit = 10;
        $page = (int)$request->query->get("page", 1);
        $total =  $achievmentRepository->getTotalAchievment();
        $achievments = $achievmentRepository->getPaginatedAchievment($page, $limit);
        $pictures = $picturesRepository->findAll();
        return $this->render('achievment/index.html.twig', [
            'achievments' => $achievments,
            'pictures' => $pictures,
            'limit' => $limit,
            'page' => $page,
            'total' => $total
        ]);
    }
}

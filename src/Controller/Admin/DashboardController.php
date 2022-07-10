<?php

namespace App\Controller\Admin;

use App\Entity\Achievment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use App\Controller\Admin\AchievmentCrudController;
use App\Entity\Partner;
use App\Entity\Picture;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin03060914", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        return $this->redirect($routeBuilder->setController(AchievmentCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="../build/images/artisansconsult.617ef625.png">');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Admin', 'fas fa-user-cog');
        yield MenuItem::linkToUrl('Site','fa fa-globe','/');
        yield MenuItem::section('Contenu');
        yield MenuItem::linkToCrud('Réalisations', 'fas fa-images', Achievment::class);
        yield MenuItem::linkToCrud('Partenaires', 'far fa-handshake', Partner::class);
    }
}

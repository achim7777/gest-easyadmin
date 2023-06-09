<?php

namespace App\Controller\Admin;

use App\Entity\Eenseignant;
use App\Entity\Etudiant;
use App\Entity\Filiere;
use App\Entity\Module;
use App\Entity\Note;
use App\Entity\Semestre;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(NoteCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gest02');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
         yield MenuItem::linkToCrud('Note', 'fas fa-list', Note::class);
        yield MenuItem::linkToCrud('Etudiant', 'fas fa-list', Etudiant::class);
        yield MenuItem::linkToCrud('Enseignant', 'fas fa-list', Eenseignant::class);
        yield MenuItem::linkToCrud('Filiere', 'fas fa-list', Filiere::class);
        yield MenuItem::linkToCrud('Module', 'fas fa-list', Module::class);
        yield MenuItem::linkToCrud('Semestre', 'fas fa-list', Semestre::class);
    }
}

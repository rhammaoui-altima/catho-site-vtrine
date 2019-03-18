<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('frontend/index.html.twig', []);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('frontend/about.html.twig', []);
    }

    /**
     * @Route("/services", name="services")
     */
    public function services()
    {
        return $this->render('frontend/services.html.twig', ['services' => $this->getServices()]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('frontend/contact.html.twig', []);
    }

    private function getServices()
    {
        return [
            [
                'title' => 'service 1',
                'content' => 'ceci est le contenu du service 1, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.'
            ],
            [
                'title' => 'SERVICE 2',
                'content' => 'ceci est le contenu du service 1, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.'
            ],
            [
                'title' => 'SERVICE 2',
                'content' => 'ceci est le contenu du service 1, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima <script>alert("j\'ai essayé de vous Cross Scripter mais Twig vous a sauvé");</script>accusamus.'
            ]
        ];
    }
}

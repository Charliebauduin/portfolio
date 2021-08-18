<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/bio", name="bio")
     */
    public function bio()
    {
        return $this->render('home/bio.html.twig');
    }


    /**
     * @Route("/resume", name="resume")
     */
    public function cv()
    {
        return $this->render('home/resume.html.twig');
    }

    /**
     * @Route("/skills", name="skills")
     */
    public function skills()
    {
        return $this->render('home/skills.html.twig');
    }

    /**
     * @Route("/realisations", name="realisations")
     */
    public function realisations()
    {
        return $this->render('home/realisations.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('home/contact.html.twig');
    }

}



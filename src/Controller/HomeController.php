<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return new Response(content: "Hello Word ");
    }

    #[Route('/about/{entier}', name: 'app_about', requirements: ['entier'=>'\d+'])]
    public function about(int $entier = 1999 ): Response
    {
        return new Response(content: "Hello ".$entier);
    }

    #[Route('home/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return new Response(content: "bienvenue ");
    }
    #[Route('home/adress', name: 'app_adress')]
    public function adress(): Response
    {
        return new Response(content: "OUJDA ");
    }

    #[Route(path:'/dummy', name: 'app_dummy')]
    public function dummy(): Response
    {
        $text = "hello this is home";
        $tabyear = [2020,2021,2022,2023];
        return $this->render(view: 'dummy.html.twig',parameters:[
            "text" => $text,
            "years" => $tabyear,
        ]);
    }

}
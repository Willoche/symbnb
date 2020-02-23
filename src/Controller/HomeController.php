<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/hello/{prenom}", name = "hello")
     * @Route("/hello", name = "hello_base")
     * Montre la page qui dit bonjour
     * 
     * @return void
     */
    public function hello($prenom)
    {
        return new Response("Bonjour " . $prenom = "");
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {

        $prenoms = ["Marion", "Enzo", "Naomi", "Marin", "Willy"];
        return $this->render(
            'home.html.twig',
            [ "title" => "Bonjour à tous !",
            "age" => 20,
            "prenoms" => $prenoms]
        );
    }
}

?>
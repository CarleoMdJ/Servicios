<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $animal = array("gato" => 2, "perro" => 1);
        return new JsonResponse($animal);
    }

    /**
    * @Route("/tortas", name="tortas")
    */
    public function tortasAction(Request $request)
    {
        $tortas = array("Jamón" => 55, 
            "Lomo" => 60, 
            "Carne" => 65,
            "Desebrada" => 65,
            "Chorizo" => 50);
        return new JsonResponse($tortas);
    }

    /**
    * @Route("/sanwish", name="sanwish")
    */
    public function sanwishAction(Request $request)
    {
        $sanwishes = array("Jamon" => 20,
            "Pollo" => 22,
            "Triple" => 25,
            "Frijoles" => 15);
        return new JsonResponse($sanwishes);
    }
}

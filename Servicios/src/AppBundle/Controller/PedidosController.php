<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PedidosController extends Controller
{
	 /**
     * @Route("/", name="pedidos")
     */
     public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $animal = array("gato" => 2, "perro" => 1);
        return new JsonResponse($animal);
    }
}

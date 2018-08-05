<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SyController extends Controller
{
    /**
     * @Route("/sy", name="sy")
     */
    public function index()
    {
        return $this->render('sy/index.html.twig', [
            'controller_name' => 'SyController',
        ]);
    }

    /**
     * @Route("/sy/number", name="sy_number")
     * @Method({"GET"})
     * @return Response
     * @throws \Exception
     */
    public function number()
    {
        $num = random_int(1, 1000);
        return new Response("index:{$num}");
    }

    /**
     *
     * @Route("/sy/hTop/{top}", name="sy_hTop")
     * @Method({"GET"})
     * @param Request $request
     * @return Response
     */
    public function hTop(Request $request)
    {
        $top = $request->get('top');
        return $this->render('sy/hTop.html.twig', [
            'top' => $top,
            'num' => rand(1, 9999)
        ]);
    }
}

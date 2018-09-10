<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TapController extends Controller
{
    /**
     * @Route("/tap", name="tap")
     */
    public function index()
    {
        return $this->render('tap/tap.html.twig', [
            'controller_name' => 'TapController',
        ]);
    }
}

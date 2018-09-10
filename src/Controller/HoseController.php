<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HoseController extends Controller
{
    /**
     * @Route("/hose", name="hose")
     */
    public function index()
    {
        return $this->render('hose/hose.html.twig', [
            'controller_name' => 'HoseController',
        ]);
    }
}

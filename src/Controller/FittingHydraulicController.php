<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FittingHydraulicController extends Controller
{
    /**
     * @Route("/fitting_hydraulic", name="fitting_hydraulic")
     */
    public function index()
    {
        return $this->render('fitting_hydraulic/fitting_hydraulic.html.twig', [
            'controller_name' => 'FittingHydraulicController',
        ]);
    }
}

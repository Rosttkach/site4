<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FittingPipeController extends Controller
{
    /**
     * @Route("/fitting_pipe", name="fitting_pipe")
     */
    public function index()
    {
        return $this->render('fitting_pipe/fitting_pipe.html.twig', [
            'controller_name' => 'FittingPipeController',
        ]);
    }
}

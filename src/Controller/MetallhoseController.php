<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MetallhoseController extends Controller
{
    /**
     * @Route("/metallhose", name="metallhose")
     */
    public function index()
    {
        return $this->render('metallhose/metallhose.html.twig', [
            'controller_name' => 'MetalHoseController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuickReleaseController extends Controller
{
    /**
     * @Route("/quick_release", name="quick_release")
     */
    public function index()
    {
        return $this->render('quick_release/quick_release.html.twig', [
            'controller_name' => 'QuickReleaseController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExpansionJointController extends Controller
{
    /**
     * @Route("/expansion_joint", name="expansion_joint")
     */
    public function index()
    {
        return $this->render('expansion_joint/expansion_joint.html.twig', [
            'controller_name' => 'ExpansionJointController',
        ]);
    }
}

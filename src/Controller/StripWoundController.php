<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class StripWoundController extends Controller
{
    /**
     * @Route("/strip_wound", name="strip_wound")
     */
    public function index()
    {
        return $this->render('strip_wound/strip_wound.html.twig', [
            'controller_name' => 'StripWoundController',
        ]);
    }

    /**
     * @Route("/download", name="download_file")
     **/
    public function downloadFileAction(){
        $file = 'katalog/price.pdf';
        $response = new BinaryFileResponse($file);
        return $response;
    }
}



<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DisplayController
 * @package App\Controller
 */

class DisplayController extends AbstractController
{
    /**
     * @Route("/display",  name="display")
     */
    public function index()
    {
        $coco="heii";
        dd($coco);
        return $this->render('display/index.html.twig', [
            'controller_name' => 'DisplayController',
        ]);
    }

    /**
     * @Route("/displayten", name="displayten")
     */
    public function displayten()
    {
        $coco="heii2";
        //dd($coco);
        return $this->render('display/ten.html.twig', [
            'controller_name' => 'DisplayController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\InputPhpJsonFile;

/**
 * Class DisplayController
 * @package App\Controller
 */

class DisplayController extends AbstractController
{
    /**
     * @Route("/display",  name="display")
     */
    public function index(InputPhpJsonFile $arrayJson1)
    {
        //$coco="heii";
        //dd($coco);

       // $transaction=file_get_contents('transactions_mock.json');
       // dd($transaction);

        $arrayJson2=$arrayJson1->decodeJson();

        dd($arrayJson2);



        return $this->render('display/index.html.twig', [
            'arrayAllCustomer' => $arrayJson2,
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

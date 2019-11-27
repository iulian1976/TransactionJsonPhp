<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\InputPhpJsonFile;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request; // Nous avons besoin d'accéder à la requête pour obtenir le numéro de page
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;

/**
 * Class DisplayController
 * @package App\Controller
 */

class DisplayController extends AbstractController
{
    /**
     * @Route("/display",  name="display")
     */
    public function index(InputPhpJsonFile $arrayJson1,PaginatorInterface $paginator,Request $request,SerializerInterface $serializer)
    {
       // $transaction=file_get_contents('transactions_mock.json');
       // dd($transaction);

        $arrayJson2=$arrayJson1->decodeJson();  // $arrayJson2 is just a array



        ($arrayJson1->hydrateJsonToObject($arrayJson2));

        //dd($arrayJson1->hydrateJsonToObject($arrayJson2)); //  pour test


        $customers = $paginator->paginate(
            $arrayJson1->hydrateJsonToObject($arrayJson2), // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );


        //dd($customers);
        return $this->render('display/index.html.twig', [
            'arrayAllCustomer' => $customers,
        ]);
    }

    /**
     * @Route("/displayten", name="displayten")
     */
    public function displayten()
    {
        //$coco="heii2";
        //dd($coco);
        return $this->render('display/ten.html.twig', [
            'controller_name' => 'DisplayController',
        ]);
    }
}

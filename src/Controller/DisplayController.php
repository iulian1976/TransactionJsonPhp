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
        $arrayJson1->decodeJson();

        $arrayJson1->clearAmount();

        $arrayJson1=$arrayJson1->hydrateJsonToObject();


        $customers = $paginator->paginate(
            $arrayJson1, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            10 // Nombre de résultats par page
        );
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

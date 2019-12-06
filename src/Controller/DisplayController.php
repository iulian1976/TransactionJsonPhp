<?php
namespace App\Controller;
use App\Service\TreatmensCustomers;
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
     * Display all customers
     * @Route("/display",  name="display")
     */
    public function alltransaction(InputPhpJsonFile $arrayJson1,PaginatorInterface $paginator,Request $request)
    {
        $arrayJson1->decodeJson();
        $arrayJson1->clearAmount();
        $arrayJson1=$arrayJson1->hydratedJsonToObject();
        $customers = $paginator->paginate(
            $arrayJson1, //  array
            $request->query->getInt('page', 1), // curent page 1
            50 // Nr result per page
        );
        return $this->render('display/index.html.twig', [
            'arrayAllCustomer' => $customers,
        ]);
    }
    /**
     * Display the Best 10 Customers with  the highest amounts
     * @Route("/displayten", name="displayten")
     */
    public function displayten(InputPhpJsonFile $arrayJson1,TreatmensCustomers $arrayAllCustomers )
    {
        $arrayJson1->decodeJson();
        $arrayJson1->clearAmount();
        $arrayJson1=$arrayJson1->hydratedJsonToObject();
        $arrayAllCustomers->SumAmountAllCustomers($arrayJson1);
        $arrayAllCustomers->sortTenCustomers();
        //dd($arrayAllCustomers->sortTenCustomers());
        return $this->render('display/firsttenamountsevents.html.twig', [
            'arrayFirstTenCustomers' => $arrayAllCustomers->sortTenCustomers(),
        ]);
    }
    /**
     * Display the first 5 Customers with more transactions
     * @Route("/displayfive", name="displayfivetransaction")
     */
    public function displayfivetransaction(InputPhpJsonFile $arrayJson1,TreatmensCustomers $arrayFiveCustomers )
    {
        $arrayJson1->decodeJson();
        $arrayJson1=$arrayJson1->hydratedJsonToObject();
        $arrayFiveCustomers=$arrayFiveCustomers->sortFiveCustomersMoreTransaction($arrayJson1);
        return $this->render('display/firstfiveevents.html.twig', [
            'arrayFirstTenCustomers' => $arrayFiveCustomers,
        ]);
    }
}
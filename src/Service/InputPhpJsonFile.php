<?php

namespace App\Service;

use App\Entity\TCustomer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class InputPhpJsonFile
{
    private $arrayJson;
    private $arrayClearJson;
    private $arrayObject=array();
    private $itemamount=0;

//$transaction=file_get_contents('transactions_mock.json');
//dd($transaction);


    public function decodeJson(){
        $data = file_get_contents('transactions_mock.json');

        $this->arrayJson= json_decode($data, true);

        return  $this->arrayJson;
    }


    // --->>>treatment and modify "amount"
    public function clearAmount(){  // because each amont have a string '$','€'...

         $i=0;
        foreach ($this->arrayJson as $item) {

            //$amount=$item['amount'];

            $item['amount']=$this->filterItemAmount($item['amount']);

            $this->arrayClearJson[$i]=$item;
         $i++;
        }

        return  $this->arrayClearJson;
    }

    public function filterItemAmount($itema){

        $this->itemamount=$itema;

        $exchangeRates = [
            '€' => 1,  // reference euro
            '$' => 0.88,
            '¥' => 0.008,
            '£' => 1.13
        ];

        $extractexchange=mb_substr($this->itemamount, 0, 1);

        $extractamount=mb_substr($this->itemamount, 1);

        $this->itemamount=round(floatval($extractamount) * $exchangeRates[ $extractexchange], 2);

        return  $this->itemamount;
    }

    //<<---treatment and modify "amount"


    public function hydratedJsonToObject()
    {
        $customer = new TCustomer();
        $i=1;
        foreach ($this->clearAmount() as $result) {

                $customer = new TCustomer();

            $customer->setId($result["id"]);
            $customer->setEventName($result["event_name"]);
            $customer->setMerchant($result["merchant"]);
            $customer->setTerminal($result["terminal"]);
            $customer->setStatus($result["status"]);
            $customer->setCardId((int)$result["card_id"]);
            $customer->setCardType($result["card_type"]);
            $customer->setAmount((float)$result["amount"]);
            $customer->setCurrency($result["currency"]);
            $customer->setCountry($result["country"]);
            $customer->setCreated(\DateTime::createFromFormat("d/m/Y",$result["created"]));


            $this->arrayObject[$i]=$customer;


              $i++;
        }

        return  $this->arrayObject;
    }




}

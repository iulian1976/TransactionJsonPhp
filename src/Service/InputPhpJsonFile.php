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
    private $arrayObject=array();


//$transaction=file_get_contents('transactions_mock.json');
//dd($transaction);


    public function decodeJson(){
        $data = file_get_contents('transactions_mock.json');

        $this->arrayJson= json_decode($data, true);

        return  $this->arrayJson;
    }

    public function hydrateJsonToObject($arrayJson)
    {

       // $this->arrayObject = $serializer->deserialize( $this->arrayJson, TCustomer::class,'transactions_mock.json' );

        //dd($arrayJson[0]["event_name"]);

        $customer = new TCustomer();
        $i=1;
        foreach ($arrayJson as $result) {

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

            dd($this->arrayObject);

        return  $this->arrayObject;
    }




}

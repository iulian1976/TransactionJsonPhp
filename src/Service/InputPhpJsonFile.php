<?php

namespace App\Service;

class InputPhpJsonFile
{
    private $arrayJson;
//$transaction=file_get_contents('transactions_mock.json');
//dd($transaction);


    public function decodeJson()
    {
        $data = file_get_contents('transactions_mock.json');

        $this->arrayJson= json_decode($data, true);

        return $this->arrayJson;
    }



}

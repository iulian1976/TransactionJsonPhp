<?php


namespace App\Service;


use App\Entity\TCustomer;

class TreatmensCustomers
{
    private $arrayCustomerDistinct;
    private $arrayIntermedCustomer;
    private $arrayListCustomer;
    private $arrayCustomSumAmount;
    private $amountSum;

    public function SumAmountAllCustomers($arrayListCustomer)
    {
          $this->arrayCustomerDistinct=$this->DisplayAllCustomers($arrayListCustomer);
          $i=0;
          foreach ($this->arrayCustomerDistinct as $key1 =>$result1) {

              $customerAmountSum = new TCustomer();

            foreach ($arrayListCustomer as $key2 =>$result2) {

                if($result2->getEventName()==$result1) {
                    $i=$i+1;
                    $this->amountSum = $this->amountSum + $result2->getAmount();
                    $customerAmountSum->setId($key1);
                    $customerAmountSum->setEventName($result1);
                    $customerAmountSum->setAmount($this->amountSum);
                    $customerAmountSum->setCount($i);
                }
            }
            $this->arrayCustomSumAmount[$key1]=$customerAmountSum;
            $i=0;
         }
         return  $this->arrayCustomSumAmount;
    }

    public function DisplayAllCustomers($arrayListCustomer)
    {

        // array Object to simple array for use array_unique


        foreach ($arrayListCustomer as $key =>$result) {


            $this->arrayIntermedCustomer[$key]=$result->getEventName();

        }

        $this->arrayCustomerDistinct=array_unique( $this->arrayIntermedCustomer);


        return $this->arrayCustomerDistinct;

    }

    public function sortTenCustomers()
    {
          usort($this->arrayCustomSumAmount, function ($item1, $item2) {return $item2->getAmount()  > $item1->getAmount();});

          return $this->arrayCustomSumAmount;

    }


    public function sortFiveCustomersMoreTransaction($arrayListCustomer)
    {

        $arrayListCustomer=$this->SumAmountAllCustomers($arrayListCustomer);

        usort($arrayListCustomer, function ($item1, $item2) {return $item2->getCount()  > $item1->getCount();});

        //dd($arrayListCustomer);

        return $arrayListCustomer;
    }


}
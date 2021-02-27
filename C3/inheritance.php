<?php
//access modifier
class father{
    private $father_money = 000;

    protected function givemoney($amount){
        $this->father_money = 5000- $amount;
        return $amount;
    }

}

class son extends father{
    private $money = 0;

    function __construct()
    {
        $this->money= $this->givemoney(50)." taka";
    }

    public function getmoney(){
        return $this->money;
    }
}

$son = new son;

echo $son->getmoney();
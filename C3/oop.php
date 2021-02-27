<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
class student{
    private $num1;
    private $num2;

    public function Sum(){
     return ($this->num1 + $this->num2);
    }

    public function __construct($arg1=0,$arg2=0)
    {
        $this->num1 = $arg1;
        $this->num2 = $arg2;
        echo "Constructor is Always First"."<br>";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $sum=$this->num1+$this->num2;
        echo"<br>destruction and sum=".$sum."<br>";
    }
}

class calculator{

    public function sum($a=0,$b=0){
        $sum = $a+$b;
        echo "calculator Sum = ".$sum."<br>";
    }
    public function sub($a=0,$b=0){
        $sub = $a-$b;
        echo "calculator Sub = ".$sub."<br>";
    }
    public function Mul($a=0,$b=0){
        $mul = $a+$b;
        echo "calculator Mul = ".$mul."<br>";
    }
    public function div($a=0,$b=0){
        $div = $a+$b;
        echo "calculator Div = ".$div."<br>";
    }
    public function __destruct()
    {
     echo"destroy2<br>";
        // TODO: Implement __destruct() method.
    }
}

class calculator2{

    public $a=0;
    public $b=0;
    public function sum(){
        $sum = $this->a+$this->b;
        echo "calculator Sum = ".$sum."<br>";
    }
    public function sub(){
        $sub = $this->a-$this->b;
        echo "calculator Sub = ".$sub."<br>";
    }
    public function Mul(){
        $mul = $this->a*$this->b;
        echo "calculator Mul = ".$mul."<br>";
    }
    public function div(){
        $div = $this->a/$this->b;
        echo "calculator Div = ".$div."<br>";
    }

}

$obj2 = new calculator;
$obj2->sum(5,10);
echo"<br>";

$obj = new student(15,20);
echo $obj->sum()."<br><hr>";

$obj3 = new calculator2();
$obj3->a=50;
$obj3->b=70;
$obj3->sum();
$obj3->sub();
$obj3->mul();
$obj3->div();
echo"<hr>"."swap<br>";
$a=5;
$b=10;
$b=$a*$b;
$a=$b/$a;
$b=$b/$a;
echo $a;
echo "<br>".$b;
echo"<hr>";
var_dump($obj);
echo"<hr>";



<?php   
class Caculator{

    public function calculate($number1, $number2, $operator){
        $result = 0;

        switch($operator){
            case '*': 
                $result = $number1 * $number2;
                break;
            case '-': 
                $result = $number1 - $number2;
                break;
            case '+': 
                $result = $number1 + $number2;
                break;
            case '/': 
                $result = $number1 / $number2;
                break;
        
        }

        return $result;
    }

}
<?php
    function hasSameLastDigit(int $number1, int $number2, int $number3){

        if(!isValid($number1) || !isValid($number2)  ||  !isValid($number3) ){

            return false;
        }
        if($number1 % 10 == $number2 % 10  || $number1 % 10 == $number3 % 10 || $number2 % 10 == $number3 % 10 )
            return true;

        else
            return false;


    }

    function isValid(int $number){
    
        if($number < 10 || $number > 1000 )
            return false;
        else
            return true;
    
    }

echo "<br>",(hasSameLastDigit(10, 100, 23));
echo "<br>",(hasSameLastDigit(10, 100, 9));
echo "<br>",(hasSameLastDigit(10, 100, 30));
echo "<br>",(hasSameLastDigit(19, 25, 959));
echo "<br>",(hasSameLastDigit(18, 236, 586));
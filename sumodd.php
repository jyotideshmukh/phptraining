<?php

function isOdd(int $num){
    if($num >0){

        if($num % 2 !=0)
            return true;
        else
            return false;

    }
    else
        return false;
}

   function sumOdd(int $start, int $end){

    if($end < $start  || $start <0 || $end < 0)
        return -1;

    $sum =0;
    
    for($i = $start; $i <= $end; $i++)
    {

        if(isOdd($i)){

            $sum+=$i;

        }

    }

    return $sum;

    }
    

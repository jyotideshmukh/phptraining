<?php
    function sumDigits(int $num){
    if($num < 0)
        return -1;
    if($num <10)
        return $num;

    $sum =0;
    $unitDigit =0;
    $isFinished =false;;
    do{

        $unitDigit =(int)($num % 10) ;
        $sum += $unitDigit;
        // echo("unit digit="+$unitDigit);
        //echo("$sum="+$sum);

        $num = (int)($num / 10);
        //echo("$num="+$num);

        if($num < 10){
            $sum += $num;
            $isFinished =true;

        }
        //echo("$num="+$num);

    }while(!$isFinished);

    return $sum;

    }


    echo "<br>", sumDigits(1);
    echo "<br>", sumDigits(10);
    echo "<br>", sumDigits(123);
    echo "<br>", sumDigits(321);
    echo "<br>", sumDigits(51);
    echo "<br>", sumDigits(600);
    echo "<br>", sumDigits(700);
    echo "<br>", sumDigits(705);
    echo "<br>", sumDigits(1237);
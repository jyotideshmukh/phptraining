<?php

    function printEqual(int $num1, int $num2, int $num3){

        if($num1 < 0 || $num2 < 0 || $num3 < 0)
            return ("Invalid Value");
        else{

             $printText = ($num1 == $num2) && ($num2 == $num3) ?
                 "All numbers are equal" :(($num1 == $num2) || ($num2 == $num3) || ($num1 == $num3)
                     ? "Neither all are equal or different" :"All numbers are different");

              return($printText);
            }
    }

    echo "<br>".printEqual(1, 1, 1);
    echo "<br>".printEqual(-1, 1, 1);
    echo "<br>".printEqual(1, -1, 1);
    echo "<br>".printEqual(1, 1, -1);
    echo "<br>".printEqual(1, 1, 2);
    echo "<br>".printEqual(1, 2, 2);
    echo "<br>".printEqual(1, 2, 1);
    echo "<br>".printEqual(1, 2, 3);
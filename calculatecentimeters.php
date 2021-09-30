<?php

    function calculateFeetAndInchesToCentimeters(float $feet, float $inches){

     $centimeters = 0;

        if($feet >=0 && ($inches >= 0 && $inches <= 12)){

            $centimeters = ($feet * 12 * 2.54) + ($inches * 2.54);

            return $centimeters;
        }
        else
        {
            return -1;
        }

    }
    $feet = 6;
    $inches = 6;

    echo($feet." feet and ".$inches." inches = ".
    calculateFeetAndInchesToCentimeters((float)$feet,(float)$inches)."cm");

    //write function to  covert inches to centimeters
<?php
$year = 2000;
$year = 1987;
//$year = 3000;



    if( $year % 4 == 0){

        if( $year % 100 == 0){

            if( $year % 400 == 0){

                echo "$year is leap year";
            }
            else
                echo "$year is not leap year";

        }
        else  echo "$year is leap year*";


    }
    else
        echo "$year is not leap year";

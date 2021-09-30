<?php
function getDurationString(int $mins, int $seconds){
     $hours =0;
     $remainingMins = 0;

        if($mins > 0  &&  ($seconds >= 0 && $seconds <=59 )){

            if(mins!=0){
                $hours = (int)$mins/60;
                $remainingMins = $mins % 60;
            }

            //print($hours+"h ".$remainingMins."m ".$seconds."s");
            return ($hours+"h ".$remainingMins."m ".$seconds."s");

        }
        else
            return ("Invalid value");

        return "Invalid value";


    }

echo "<br>".getDurationString(3602,59);

//write down function to get duration string from seconds
//echo "<br>".getDurationStringFromSeconds(3945);
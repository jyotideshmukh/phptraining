<?php
    function printYearsAndDays(int $minutes)
    {

        if ($minutes >= 0) {

            if ($minutes == 0) {
                return ($minutes . " min = 0 y and 0 d");
            }
            elseif($minutes <= 60){
                return ($minutes . " min = 0 y and 0 d and $minutes minutes");
            }
            elseif($minutes < (24 * 60)){
                $hours = round($minutes/60);
                $min = $minutes%60;
                return ($minutes . " min = 0 y and 0 d and $hours hours and $hours hours and  minutes");
            }
            elseif($minutes < (365 * 24 * 60)){
                $remainingMins = $minutes % ( 24 * 60);
                $days = round($remainingMins/(24*60));
               // $remainingMins =
                $hours = (($minutes-($days*24*60))%60);
                $min = $minutes%60;
                return ($minutes . " min = 0 y and 0 d and $hours hours and $hours and $min minutes");
            }

            else {
                $years = $minutes / (365 * 24 * 60);

                $remainingMins = $minutes % (365 * 24 * 60);

                $days = $remainingMins / (24 * 60);

                return ($minutes . " min = " . $years . " y and " . $days . " d");

            }

        } else {
            return ("Invalid Value");
        }
    }

echo "<br>".printYearsAndDays(1440);
echo "<br>".printYearsAndDays(-1440);
echo "<br>".printYearsAndDays((365*24*60)+1);
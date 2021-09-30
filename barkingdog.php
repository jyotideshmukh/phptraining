<?php
    function shouldWakeUp(bool $barking, int $hourOfDay): bool
    {
        if ($barking && ($hourOfDay >= 0 && $hourOfDay <= 23)) {

            if (($hourOfDay >= 0 && $hourOfDay < 8) || ($hourOfDay > 22)) {

                return true;
            } else {

                return false;
            }

        }
        return false;
    }

echo "<br>".shouldWakeUp(true,23);
echo "<br>".shouldWakeUp(true,1);
echo "<br>".shouldWakeUp(true,10);
echo "<br>".shouldWakeUp(false,1);
echo "<br>".shouldWakeUp(false,-1);
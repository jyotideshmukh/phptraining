<?php
function printFactors(int $number)
{
    if ($number < 1) {
        echo "<br>", ("Invalid Value");
    } else {

        echo "<br>", (1);

        for ($i = 2; $i <= $number / 2; $i++) {

            if ($number % $i == 0) {

                echo "<br>", ($i);
            }

        }

        if ($number != 1)
            echo "<br>", ($number);

    }
}

echo "<br>", ("************");
echo "<br>", printFactors(0);
echo "<br>", ("************");
echo "<br>", printFactors(7);
echo "<br>", ("************");
echo "<br>", printFactors(16);
echo "<br>", ("************");
echo "<br>", printFactors(45);

echo "<br>", ("************");
echo "<br>", printFactors(51);
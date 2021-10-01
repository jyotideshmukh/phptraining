<?php
function getGreatestCommonDivisor(int $number1, int $number2)
{
    if ($number1 < 10)
        return -1;

    $greatestCommonDivser = 1;
    $i = 2;

    if ($number2 < 0) {
        $greatestCommonDivser = -1;
        $i = $number2;
    }

    $smallNum = $number1;

    if ($number1 > $number2) {
        $smallNum = $number2;
    }

    for (; $i <= $smallNum; $i++) {
        if ($number1 % $i == 0 && $number2 % $i == 0) {
            $greatestCommonDivser = $i;
        }
    }
    return $greatestCommonDivser;

}


echo "<br>", (getGreatestCommonDivisor(18, 9));
echo "<br>", (getGreatestCommonDivisor(20, -15));
echo "<br>", (getGreatestCommonDivisor(25, 15));
echo "<br>", (getGreatestCommonDivisor(81, 153));
echo "<br>", (getGreatestCommonDivisor(9, 18));

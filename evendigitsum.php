<?php
function getEvenDigitSum(int $number): int
{

    $unitDigit = 0;
    $sum = 0;

    if ($number < 0)
        return -1;

    while ($number > 0) {

        $unitDigit = $number % 10;

        if ($unitDigit % 2 == 0) {
            $sum += $unitDigit;
        }
        $number = $number / 10;

    }

    return $sum;

}


echo "<br>",("Sum=". getEvenDigitSum(123456789));
echo "<br>",("Sum=". getEvenDigitSum(11));
echo "<br>",("Sum=". getEvenDigitSum(102));
echo "<br>",("Sum=". getEvenDigitSum(200));
echo "<br>",("Sum=". getEvenDigitSum(4));
echo "<br>",("Sum=". getEvenDigitSum(62));
echo "<br>",("Sum=". getEvenDigitSum(51));
echo "<br>",("Sum=". getEvenDigitSum(-22));

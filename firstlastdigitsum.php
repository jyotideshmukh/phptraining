<?php
    function sumFirstAndLastDigit(int $number)
    {

        $sum = 0;
        if ($number < 0)
            return -1;

        $cnt = 0;
        $prevNumber = 0;
        $unitDigit = 0;

        while ($number > 0) {

            $unitDigit = (int)($number % 10);

            if ($cnt == 0) {
                $sum = $unitDigit;
                // echo ("First time $sum or last digit ="+$sum);

            }
            $number = (int)($number / 10);
            //echo ("Number ="+$number);

            if ($number == 0 && $cnt > 0) {
                $sum += $prevNumber;
                //echo ("Previous number ="+$prevNumber);
                //echo ("$sum at last step ="+$prevNumber);
            } else if ($number == 0 && $cnt == 0) {
                $sum += $sum;
            }
            $prevNumber = $number;
            //echo ("Previous Number ="+$prevNumber);
            $cnt++;

        }

        return $sum;

    }

    echo "<br>",("Sum of first and last digit of 5 is ".sumFirstAndLastDigit(5));
    echo "<br>",("Sum of first and last digit 121 is ".sumFirstAndLastDigit(121));
    echo "<br>",("Sum of first and last digit 100 is ".sumFirstAndLastDigit(100));
    echo "<br>",("Sum of first and last digit -100 is ".sumFirstAndLastDigit(-100));
    echo "<br>",("Sum of first and last digit 11 is ".sumFirstAndLastDigit(11));

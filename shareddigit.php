<?php
    function hasSharedDigit(int $number1, int $number2)
    {

        $unitDigitNum = 0;

        if ($number1 < 10 || $number1 > 99 || $number2 < 10 || $number2 > 99) {

            return false;
        }
        $i = 0;

        while ($number1 > 0) {

            $unitDigitNum = $number1 % 10;

            $tempNumber = $number2;

            while ($number2 > 0) {

                //echo "<br>",("$i Unitdigit =" .$unitDigitNum . " other unit digit=".($number2 % 10));
                $i++;

                if ($unitDigitNum == $number2 % 10) {

                    return true;

                }

                $number2 = (int)($number2 / 10);
                //echo "<br> number2=".$number2;


            }
            $number2 = $tempNumber;
            $number1 = (int)($number1 / 10);


        }
        return false;

    }

//check shared digit
echo "<br>",("Test1=".hasSharedDigit(12, 13));
echo "<br>",("Test2=".hasSharedDigit(12, 34));
echo "<br>",("Test3=".hasSharedDigit(25, 53));
echo "<br>",("Test4=".hasSharedDigit(11, 10));

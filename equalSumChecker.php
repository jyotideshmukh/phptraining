<?php
    function hasEqualSum(int $number1, int $number2, int $sum){

        return $number1 + $number2 == $sum ? true : false;
    }

    echo "<br>".(hasEqualSum(1, 1, 2) ? 'true':'false');
    echo "<br>".(hasEqualSum(1, 2, 2)? 'true':'false');
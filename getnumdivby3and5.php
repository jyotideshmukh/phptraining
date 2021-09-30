<?php
function getFirstFiveNumbersDividedBy3And5(int $num1, int $num2){

    $sum = 0;
        $count = 0;

            if($num1 < $num2)
            {
                for($i = $num1; $i<=$num2; $i++){

                if($i%3 == 0 && $i%5 == 0){
                    echo "<br>",($i);
                    $sum+=$i;
                    $count++;
                }
                if($count == 5)
                    break;

            }
            echo "<br>",("sum of first five  which are divided by 3 and 5 is ".$sum);

        }
        else
        {
            $count = 0;
            $sum = 0;
            //echo "num2".$num2;
            for($i = $num1; $i >= $num2; $i--){
                if($i%3 == 0 && $i%5 == 0) {
                    echo "<br>", ($i);
                    $sum += $i;
                    $count++;
                }
                if($count == 5)
                    break;
            }

            echo "<br>",("sum of five  numbers which are divided by 3 and 5 is ".$sum);

        }

    }

    echo "<br>".getFirstFiveNumbersDividedBy3And5(1, 110);
    echo "<br>********************************";
    echo "<br>".getFirstFiveNumbersDividedBy3And5(1000, 1);
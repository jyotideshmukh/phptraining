<?php
    function getDayByNum(int $dayNum)
    {

        switch ($dayNum) {
            case 0:
                echo("Sunday");
                break;
            case 1:
                echo("Monday");
                break;
            case 2:
                echo("Tuesday");
            case 3:
                echo("Wednesday");
                break;
            case 4:
                echo("Thursday");
                break;
            case 5:
                echo("Friday");
                break;
            case 6:
                echo("Saturday");
                break;
            default:
                echo("Not valid day");
                break;
        }
    }

    echo "<br>", getDayByNum(0);
    echo "<br>", getDayByNum(1);
    echo "<br>", getDayByNum(3);
    echo "<br>", getDayByNum(4);
    echo "<br>", getDayByNum(5);
    echo "<br>", getDayByNum(6);
    echo "<br>", getDayByNum(7);
        
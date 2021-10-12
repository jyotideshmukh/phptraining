<?php


//$days = [1=>'Mon',2=>'Tue',3=>'Wed',4=>'Thu',5=>'Fri',6=>'Sat',7=>'Sun'];
$month = ['Jan','Feb','Mar','April'];
$day = 10;
switch($day){
    case 1 :
        echo 'Mon';
       break;
    case 2 :
        echo 'Tue';
        break;

    case 3 :
        echo 'Wed';
        break;

    case 4 :
        echo 'Thu';
        break;
    case 5 :
        echo 'Fri';
        break;
    case 6 :
        echo 'Sat';
        break;
    case 7 :
        echo 'Sun';
        break;
    default:
        echo 'Wrong day';

}
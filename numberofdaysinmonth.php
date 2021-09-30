<?php

    function isLeapYear(int $year)
    {

        if ($year < 1 || $year > 9999) {
            return false;
        }

        if ($year > 1 && $year < 9999) {

            if ($year % 4 == 0) {

                if ($year % 100 == 0) {

                    if ($year % 400 == 0) {

                        return true;
                    }
                    return false;

                } else  return true;


            }
            return false;
        }
        return false;
    }




    function getDaysInMonth(int $month,int $year){

    if(($year < 1  ||  $year > 9999) || ($month < 1 || $month > 12)){
        return -1;

    }

    $days=31;
          switch($month){

              case 1: case 3: case 5: case 7: case 8: case 10: case 12:
              $days = 31;
              break;

              case 4: case 6: case 9: case 11:
              $days = 30;
              break;

              case 2:
                  if(isLeapYear($year)){

                      $days = 29;
                  }
                  else
                      $days = 28;
                  break;
              default:
                  $days = -1;

          }

    return $days;

    }
    echo "<br>",(getDaysInMonth(2, 1924));
    echo "<br>",(getDaysInMonth(2, 3000));
    echo "<br>",(getDaysInMonth(8, 2020));
    echo "<br>",(getDaysInMonth(2, 2020));

    echo "<br>",(isLeapYear(-2020));
    echo "<br>",(isLeapYear(2020));
    echo "<br>",(isLeapYear(3000));
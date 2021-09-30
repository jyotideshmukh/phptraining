<?php
    $a = 3;
    $a += 5; // sets $a to 8, as if we had said: $a = $a + 5;
    echo "a=".$a;
    $a = ($b = 4) + 5;
    echo "<pre>";
    echo "a=".$a."\n";;
    echo "b=".$b."\n";;
    echo (5 % 3)."\n";           // prints 2
    echo (5 % -3)."\n";          // prints 2
    echo (-5 % 3)."\n";          // prints -2
    echo (-5 % -3)."\n";         // prints -2

    echo "******************************* \n";
    echo "Arithmatic assignment"."\n";
    $a = 3;
    $a += 5; // sets $a to 8, as if we had said: $a = $a + 5;
    $b = "Hello ";
    $b .= "There!"; // sets $b to "Hello There!", just like $b = $b . "There!";
    echo $b."\n";

    echo "******************************* \n";
    echo " Assignment by reference"."\n";
    $a = 3;
    $b = &$a; // $b is a reference to $a

    print "$a\n"; // prints 3
    print "$b\n"; // prints 3

    $a = 4; // change $a

    print "$a\n"; // prints 4
    print "$b\n"; // prints 4 as well, since $b is a reference to $a, which has
    // been changed

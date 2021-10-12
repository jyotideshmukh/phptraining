<?php

    $array = array(1,2,3,4,5);
    echo "<pre>",var_dump($array);
    $array = [1,2,3,4,5];



    $strArray = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];

    var_dump($strArray);

    $mixArray = ['blue','green',1,'Thu',5,'Sat',3.5];

    print_r($mixArray);

    $empty_arr =[];
    var_dump($empty_arr);
    print_r($empty_arr);

    $array = array_fill(0,10, "Hello");

    print_r($array);

<?php
    define("NEW_LINE","<br>");
   /* echo "****array_keys — Return all the keys or a subset of the keys of an array***", NEW_LINE;
    $array = array(0 => 100, "color" => "red");
    echo "<pre>",print_r(array_keys($array)),NEW_LINE;

    $array = array("blue", "red", "green", "blue", "blue");
    echo "<pre>",print_r(array_keys($array, "blue")),NEW_LINE;

    $array = array("color" => array("blue", "red", "green"),
        "size"  => array("small", "medium", "large"));

     foreach($array as $key =>$value){
         echo print_r(array_keys($value)),NEW_LINE;
     }
    echo "<pre>",print_r(array_keys($array)),NEW_LINE;*/

   /* echo "******************array_pop — Pop the element off the end of array*******",NEW_LINE;


    $stack = array("orange", "banana", "apple", "raspberry");
    echo "<pre>",print_r($stack), NEW_LINE;

    $fruit = array_pop($stack);
    echo "<pre>",print_r($stack), NEW_LINE;
    echo "POPEd Item", $fruit, NEW_LINE;

    $fruit = array_pop($stack);
    echo print_r($stack), NEW_LINE;
    echo "POPEd Item", $fruit;*/

    /*echo "****array_push — Push one or more elements onto the end of array***", NEW_LINE;
    $stack = array("orange", "banana");
    echo "Before push array is ",NEW_LINE;
    echo "<pre>",print_r($stack);
    echo "After push array is ",NEW_LINE;
    array_push($stack, "apple", "raspberry");
    echo "<pre>",print_r($stack);*/

   /* echo "****array_rand — Pick one or more random keys out of an array***",NEW_LINE;
    $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
    echo "<pre>",print_r($input);
    $rand_keys = array_rand($input, 2);
    echo "<pre>",print_r($rand_keys);
    echo $input[$rand_keys[0]] . NEW_LINE;
    echo $input[$rand_keys[1]] . NEW_LINE;*/

    /*echo "***array_reverse — Return an array with elements in reverse order***",NEW_LINE;
    $input  = array("php", 4.0, array("green", "red"));
    $reversed = array_reverse($input);
    $preserved = array_reverse($input, true);

    echo "<pre>Original Array",NEW_LINE,print_r($input);
    echo "<pre>Reversed Array, Keys changed",NEW_LINE,print_r($reversed);
    echo "<pre>Reversed Array with preserved keys true",NEW_LINE,print_r($preserved);*/

   /*echo "**array_search — Searches the array for a given value and returns the first corresponding key if successful**",NEW_LINE;

    $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
    echo "<pre>Original Array",NEW_LINE,print_r($array);

    $key = array_search('green', $array); // $key = 2;
    echo "Key of green ",$key, NEW_LINE;
    $key = array_search('red', $array);   // $key = 1;
    echo "Key of red ",$key, NEW_LINE;

    $key = array_search('Red', $array,true);   // $key = false;
    echo "Key of  Red is ",$key, NEW_LINE;

    $key = array_search('RED', $array,false);   // $key = false;
    echo "Key will not print as RED id not red with strict = true param",$key, NEW_LINE;*/

    /*echo "**********array_sum — Calculate the sum of values in an array******", NEW_LINE;
    $a = array(2, 4, 6, 8);
    echo "<pre>", "array a =",NEW_LINE,print_r($a),NEW_LINE;
    echo "sum(a) = " . array_sum($a) . NEW_LINE,NEW_LINE,NEW_LINE;

    $b = array("a" => 1.2, "b" => 2.3, "c" => 'green');
    echo "<pre>", "array b =",NEW_LINE,print_r($b),NEW_LINE;
    echo "sum(b) = " . array_sum($b) . NEW_LINE;*/

    /*echo "***array_values — Return all the values of an array***",NEW_LINE;
    $array = array("size" => "XL", "color" => "gold");
    echo "<pre>",print_r(array_values($array));*/

   /*echo "****in_array — Checks if a value exists in an array****",NEW_LINE;
    $os = array("Mac", "NT", "Irix", "Linux");
    if (in_array("Irix", $os)) {
        echo "Got Irix",NEW_LINE;
    }
    if (in_array("mac", $os)) {
        echo "Got mac",NEW_LINE;
    }*/

    /*echo "**count — Counts all elements in an array or in a Countable object**", NEW_LINE;

    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    var_dump(count($a));

    $b[0]  = 7;
    $b[5]  = 9;
    $b[10] = 11;
    var_dump(count($b));*/

   /*echo "****sizeof — Alias of count() This function is an alias of: count().***",NEW_LINE;

    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    echo sizeof($a),"<br>";*/

   /*echo "***list — Assign variables as if they were an array", NEW_LINE;
    $info = array('coffee', 'brown', 'caffeine');

    // Listing all the variables
    list($drink, $color, $power) = $info;
    echo "$drink is $color and $power makes it special.\n",NEW_LINE;

    // Listing some of them
    list($drink, , $power) = $info;
    echo "$drink has $power.\n",NEW_LINE;

    // Or let's skip to only the third one
    list( , , $power) = $info;
    echo "I need $power!\n",NEW_LINE;

    // list() doesn't work with strings
    list($bar) = "abcde";
    var_dump($bar); // NULL*/


   /* echo "*******array_map***********", NEW_LINE;
    $func = function(int $value): int {
        return $value * 2;
    };

    echo "<pre>", print_r(array_map($func, range(1, 5)));*/

   /*echo "*** reset, current and next", NEW_LINE;
    $array = array('step one', 'step two', 'step three', 'step four');

    // by default, the pointer is on the first element
    echo current($array) . "<br />\n"; // "step one"

    // skip two steps
    next($array);
    next($array);
    echo current($array) . "<br />\n"; // "step three"

    // reset pointer, start again on step one
    reset($array);
    echo current($array) . "<br />\n"; // "step one"*/

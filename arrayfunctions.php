<?php
    define("NEW_LINE","<br>");
    $array = array(0 => 100, "color" => "red");
    echo "<pre>",print_r(array_keys($array)),NEW_LINE;

    $array = array("blue", "red", "green", "blue", "blue");
    echo "<pre>",print_r(array_keys($array, "blue")),NEW_LINE;

    $array = array("color" => array("blue", "red", "green"),
        "size"  => array("small", "medium", "large"));
    echo "<pre>",print_r(array_keys($array)),NEW_LINE;
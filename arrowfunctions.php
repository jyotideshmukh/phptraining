<?php

/*$taxonomies = explode(",",'Work, family, personal');
echo "<pre>",   var_dump($taxonomies);

$taxonomies = array_map(
    function($taxonomies){
        return trim($taxonomies);
    },
    $taxonomies);

echo "<pre>",   var_dump($taxonomies);*/


/*
$y = 1;

$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
var_export($fn1(3));
*/
$num =2;
$table =[1,2,3,4,5,6,7,8,9,10];
$table = array_map(
    function($number,$num){

        return $num *$number;
    },
    $table,$num);

echo "<pre>",var_dump($table);


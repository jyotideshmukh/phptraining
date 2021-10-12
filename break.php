<?php

$arr  = ['one','two','three','four','stop','five'];

foreach($arr as $key => $value){


    if($value == 'stop')
        break;

    echo "\n".($key)." = ".$value;
}
<?php


$arr = ['one', 'two', 'three', 'four', 'stop', 'five'];

foreach ($arr as $key => $value) {


    if ($value == 'stop')
        continue;
    echo "\n" . ($key) . " = " . $value;
}
<?php
    define(INVALID_VALUE,-1);
    function circleArea(float $radius){

        if($radius < 0){
            return INVALID_VALUE;
        }

        return $radius * $radius * pi();

    }

    function rectangleArea(float $length, float $width){

        if($length < 0 || $width < 0){
            return INVALID_VALUE;
        }

        return $length * $width;

    }
    echo INVALID_VALUE;
    echo "<br>".(rectangleArea(10, 5));
    echo "<br>".(circleArea(10));
    echo "<br>".(circleArea(-10));
    echo "<br>".(rectangleArea(-10,5));
<?php
require_once 'patterns.php';
    function testSwitchCase($testChar) {

        switch($testChar){
            case 'A':
                echo "<br>".("Char A");
                break;
            case 'B':
                echo "<br>".("Char B");
                break;
            case 'C':
                echo "<br>".("Char C");
                break;
            default:
                echo "<br>".("Char is not A, B or C");
                break;
        }
    }

    echo "<br>", testSwitchCase('A');
    echo "<br>", testSwitchCase('B');
    echo "<br>", testSwitchCase('C');
    echo "<br>", testSwitchCase('Q');
require_once 'patterns.php';


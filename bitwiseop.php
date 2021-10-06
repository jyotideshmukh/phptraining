<?php
    //https://www.php.net/manual/en/language.operators.bitwise.php
    //To show all errors, except for notices
    echo "To show all errors, except for notices you can use E_ALL & ~E_NOTICE" . "<br>";
    echo E_ALL & ~E_NOTICE;
    echo "<br> To show all errors, except for notices you can also use E_ALL ^ E_NOTICE<br>";
    echo E_ALL ^ E_NOTICE;
    echo "<br>";
    $format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";

  /*  echo <<<EOH
     ---------     ---------  -- ---------
     result        value      op test
     ---------     ---------  -- ---------
    EOH;

    $values = array(0, 1, 2, 4, 8);
    $test = 1 + 4;

    echo "<br> Bitwise AND <br>";
    foreach ($values as $value) {
        $result = $value & $test;
        printf($format, $result, $value, '&', $test);
        echo "<br>";
    }

    echo "<br> Bitwise Inclusive OR <br>";
    foreach ($values as $value) {
        $result = $value | $test;
        printf($format, $result, $value, '|', $test);
        echo "<br>";
    }

    echo "<br> Bitwise Exclusive OR (XOR) <br>";
    foreach ($values as $value) {
        $result = $value ^ $test;
        printf($format, $result, $value, '^', $test);
        echo "<br>";
    }*/
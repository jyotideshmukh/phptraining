<?php
    print isset($a); // $a is not set. Prints false. (Or more accurately prints ''.)

    $b = 0; // isset($b) returns true (or more accurately '1')

    print "<br>b isset".isset($a);

    $c = array(); // isset($c) returns true

    print "<br>Array isset".isset($c);

    $b = null; // Now isset($b) returns false;

    print "<br> null b ".isset($b);

    unset($c); // Now isset($c) returns false;

    print "<br> unset c".isset($c);


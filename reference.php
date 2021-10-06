<?php
    $name = 'Jyoti';              // Assign the value 'Jyoti' to $name

    $alias = &$name;              // Reference $name via $alias. 

    $alias = "My name is $alias";  // Alter $alias... 

    echo "<br>".$alias; 

    echo "<br>".$name;
    echo "<br>***********************************************";

    $foo = 25;
    $bar = &$foo;      // This is a valid assignment.
    //$bar = &(24 * 7);  // Invalid; references an unnamed expression. Parse error: syntax error, unexpected ';', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) in D:\xampp\htdocs\training\reference.php on line 12 

    function test()
    {
        return 25;
    }

    $bar = &test();    // Invalid. // Notice: Only variables should be assigned by reference in D:\xampp\htdocs\training\reference.php on line 19

    $myName = 'Jyoti';
    $$myName = 'Pawar';
    echo "<br> Demonstraing variable variable<br>",$myName." ".$$myName;
    echo "<br>", $myName." ".$Jyoti;
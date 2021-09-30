<?php
$name = 'Jyoti';
$Name = 'Sayli';
echo "$name, $Name";      // outputs "Jyoti, Sayli"
//Parse error: syntax error, unexpected '4' (T_LNUMBER), expecting variable (T_VARIABLE) or '{' or '$'
//$4site = 'not yet';     // invalid; starts with a number

$_4site = 'not yet';    // valid; starts with an underscore
$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.
echo $_4site;
echo $täyte;

<?php

    define("NEW_LINE","<br>");
   /*$daysStr = 'Mon,Tue,Wed,Thu,Fri,Sat,Sun';
    $days = explode(",",$daysStr);
    echo "<pre>", print_r($days);

    $seprateWeekend = explode(",",$daysStr,6);
    echo "<pre>", print_r($seprateWeekend);
    $weekend = explode(",",$daysStr,2);
    echo "<pre>", print_r($weekend);

    $daysArr = explode(",",$daysStr,-2);
    $weekdays = join(",",$daysArr);
    echo "<pre>", print_r($daysArr);
    echo "<br>", $weekdays ,"***","<br>";
    print $weekdays;

    print "This string spans
multiple lines. The newlines will be
output as well";*/


    /*echo "<br>","*********************str_replace***********************","<br>";

    // Provides: <body text='black'>
    $bodytag = str_replace("%body%", "black", "<body text='%body%'>");
    echo $bodytag,"<br>";

    // Provides: Hll Wrld f PHP
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
    echo $onlyconsonants,"<br>";
    // Provides: You should eat pizza, beer, and ice cream every day
    $phrase  = "You should eat fruits, vegetables, and fiber every day.";
    $healthy = array("fruits", "vegetables", "fiber");
    $yummy   = array("pizza", "beer", "ice cream");

    $newphrase = str_replace($healthy, $yummy, $phrase);

    echo $newphrase,"<br>";
    // Provides: 2
    $str = str_replace("ll", "", "good golly miss molly!", $count);
    echo $str,"<br>";
    echo $count;*/



    /*echo "<br>","*********************str_split***********************","<br>";


    $str = "Hello Friend";

    $arr1 = str_split($str);
    $arr2 = str_split($str, 3);

    echo "<pre>", print_r($arr1);
echo "<pre>", print_r($arr2);*/

    //echo "<br>","*********************strip_tags***********************","<br>";
    //form example
    //phpinfo();
  //echo "******************************** strstr****************************","<br>";
   //strstr — Find the first occurrence of a string


   /* $email = 'name@example.com';
    $domain = strstr($email, '@');
    echo "Domain=".$domain,"<br>"; // prints @example.com

    $user = strstr($email, '@', true);
    echo "User=",$user."<br>"; // prints name*/

   /* echo "********************strpos — Find the position of the first occurrence of a substring in a string****************************","<br>";
    //strpos(string $haystack, string $needle, int $offset = 0): int|false

    $mystring = 'abc';
    $findme   = 'a';
    $pos = strpos($mystring, $findme);

    // The !== operator can also be used.  Using != would not work as expected
    // because the position of 'a' is 0. The statement (0 != false) evaluates
    // to false.
    if ($pos !== false) {
        echo "The string '$findme' was found in the string '$mystring'";
        echo " and exists at position $pos";
    } else {
        echo "The string '$findme' was not found in the string '$mystring'";
    }*/



  /*  echo "******************************** strrev — Reverse a string****************************","<br>";
    echo strrev("Hello world!"); // outputs "!dlrow olleH"*/

   /* echo "******************************** strtok — Tokenize string****************************","<br>";

    $string = "This is\tan example\nstring";
    /* Use tab and newline as tokenizing characters as well
    $tok = strtok($string, " \n\t");
    //echo "Token", $tok."<br>";
    while ($tok !== false) {
        echo "Word=$tok<br />";
        $tok = strtok(" \n\t");
    }*/
/*echo "******************************** ucfirst — Make a string's first character uppercase****************************","<br>";
    $foo = 'hello world!';
    $foo = ucfirst($foo);             // Hello world!

    $bar = 'HELLO WORLD!';
    $bar = ucfirst($bar);             // HELLO WORLD!
    $bar = ucfirst(strtolower($bar)); // Hello world!*/

   /* echo "*********ucwords — Uppercase the first character of each word in a string","<br>";
    $foo = 'hello world!';
    $foo = ucwords($foo);             // Hello World!

    $bar = 'HELLO WORLD!';
    $bar = ucwords($bar);             // HELLO WORLD!
    $bar = ucwords(strtolower($bar)); // Hello World!*/

    /*echo "********************addslashes — Quote string with slashes*****************".NEW_LINE;
    //when you submit the form and adding in database that time you need to supress the quotes
    //by adding slashes
    //then while showing content back to user you need strip slashes

    $str =" I don't like to study ".NEW_LINE;
    echo addslashes($str);
    echo stripslashes(addslashes($str));*/
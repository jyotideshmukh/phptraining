<?php
    function isPalindrome(int $number){

         $reversenumber = 0;
         $unitDigit = 0;

        if($number < 0){

            $number = -($number);
        }

        $tempNum = $number;
        while($number > 0){

            $unitDigit =($number % 10) ;

            $number = (int)($number / 10);
            //echo ("Place value=".$placeValue." Unit digit =".$unitDigit);

            $reversenumber = ($reversenumber * 10) + $unitDigit;

            //echo ("Reverse $number =".$reversenumber);

        }

        //echo ("$number="+$tempNum+ " reverse $number ="+$reverse$number);
        if($tempNum == $reversenumber)
            return true;
        else
            return false;


    }

    echo "<br>",( "121  ".(isPalindrome(121)? 'is Palindrome':'Not a Palindrome'));
    echo "<br>",( "12 ".(isPalindrome(12)? 'is Palindrome':'Not a Palindrome'));
    echo "<br>",( "-1221  ".(isPalindrome(-1221)? 'is Palindrome':'Not a Palindrome'));
    echo "<br>",( "1001 ".(isPalindrome(121)? 'is Palindrome':'Not a Palindrome'));
    echo "<br>",( "12321 ".(isPalindrome(121)? 'is Palindrome':'Not a Palindrome'));
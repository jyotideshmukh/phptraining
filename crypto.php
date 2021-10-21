<?php
    define("NEW_LINE", "<br>");
  /*  echo "************md5 — Calculate the md5 hash of a string************","<br>";

    $str = 'jyoti';
    $strmd5 = md5($str);
    echo $strmd5, NEW_LINE;
    if (md5($str) === $strmd5) {
        echo "Coorect - Jyoti str was hashed?";
    }*/

    /*echo "*************************crypt — One-way string hashing*****************************************","<br>";
    $user_input =  '12+#æ345';
    $pass = urlencode($user_input);
    //$pass_crypt = crypt($pass);
    $pass_crypt = crypt($pass,'pqr');

    if ($pass_crypt == crypt($pass, $pass_crypt)) {
        echo "Success! Valid password";
    } else {
        echo "Invalid password";
    }*/

    /*echo "**************************sha1 — Calculate the sha1 hash of a string***********","<br>";

    $user_input =  '12+#æ345';
    $sha1Val = sha1($user_input);
    echo sha1($user_input), NEW_LINE;
    if(sha1($user_input) == $sha1Val){
        echo "Sha1 value is correct";
    }
    else{
        echo "Sha1 value is not correct";
    }*/

    echo "**************************sha1_file — Calculate the sha1 hash of a file";
    $file = "while.php";

    echo "Sha1 of file ".$file. "is",NEW_LINE;
    echo '(SHA1: ' . sha1_file($file).") ".PHP_EOL;

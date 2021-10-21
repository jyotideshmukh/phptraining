<?php
    define("NEW_LINE","<br>");
    echo "***fopen — Opens file or URL****",NEW_LINE;
    //read more - https://www.php.net/manual/en/function.fopen.php
    $path  = 'test.txt';

    $filename = $path;
    $somecontent = "Adding extra content\n";
    if (!$handle = fopen($filename, 'a')) {
        echo "Cannot open file ($filename)";
        exit;
    }

    // Write $somecontent to our opened file.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
    fclose($handle);

    if (!$handle = fopen($filename, 'r')) {
        echo "Cannot open file ($filename)";
        exit;
    }
    else {
        $contents = fread($handle, filesize($filename));
        echo "File content is =".$contents;
    }
    fclose($handle);

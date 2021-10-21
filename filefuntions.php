<?php
    define("NEW_LINE","<br>");
    echo "*******dirname — Returns a parent directory's path*****",NEW_LINE;
    echo __DIR__, NEW_LINE;

    $path = dirname(__DIR__);
    echo "Parent path of current directory is ". $path, NEW_LINE;
    echo "Basename of path  $path is ".basename(__DIR__),NEW_LINE;

    $path_parts = pathinfo($path);
    echo "Directory Name = ",$path_parts['dirname'], NEW_LINE;
    echo "Base Name = ",$path_parts['basename'] ,NEW_LINE;
    echo "file extention = ",$path_parts['extension'], NEW_LINE;
    echo "file name = ", $path_parts['filename'], NEW_LINE;

    $parentpath = dirname(dirname(__FILE__) . '/area.php');
    $path = dirname(__FILE__) . '/area.php';
    echo "Parent path of area.php is =". $parentpath, NEW_LINE;
    echo "Basename of path  $path is =".basename($path),NEW_LINE;


    $path_parts = pathinfo($path);

    echo "Directory Name=",$path_parts['dirname'], NEW_LINE;
    echo "Base Name=",$path_parts['basename'], NEW_LINE;
    echo "file extention=",$path_parts['extension'], NEW_LINE;
    echo "file name=", $path_parts['filename'], NEW_LINE;


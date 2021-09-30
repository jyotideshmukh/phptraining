<?php
    echo "<pre> GLOBALS<br>",print_r($GLOBALS);

    echo "<br>********************************";

    echo "<pre>_SERVER<br>",print_r($_SERVER);

    echo "<br>********************************";

    echo "<pre>REQUEST<BR>",print_r($_REQUEST);

    echo "<br>********************************";

    echo "<pre>FILES<br>",print_r($_FILES);

    echo "<br>********************************";

    echo "<pre>ENV<br>",print_r($_ENV);

    echo "<br>********************************";

    echo "<pre>SESSION<br>",print_r($_SESSION);

    echo "<br>********************************";

    echo "<pre>COOKIE<br>",print_r($_COOKIE);

    echo "<br>********************************";

    echo "<pre>GET<br>",print_r($_GET);

    echo "<br>********************************";

    echo "<pre>POST<br>",print_r($_POST);

    echo "<br>********************************";

    echo $http_response_header;

    echo "<br>********************************";

    echo $argc;

    echo "<br>********************************";

    echo $argv;
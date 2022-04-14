<?php

    $ch = curl_init();

    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, "https://www.wipro.com/");
    curl_setopt($ch, CURLOPT_HEADER, 0);

    // grab URL and pass it to the browser
    $response = curl_exec($ch);

    echo $response;

    // close cURL resource, and free up system resources
    curl_close($ch);
<?php

/*$myInfo = ['name'=>'jyoti',
    'lastname'=>'pawar',
    'email'=>'jyoti.gmail.com',
    'company'=>'Wipro'];

$jsonData = json_encode($myInfo);

$uri = 'http://127.0.0.1:8000/poc/encryptapi';

$headers = array(
    'method' => 'POST',
    'data' => json_encode($myInfo),
    'max_redirects' => 0,
    'headers' => array('Content-Type' => 'application/json'),
);

$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $uri);
curl_setopt($ch, CURLOPT_HEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($myInfo));

// grab URL and pass it to the browser
$response = curl_exec($ch);

echo $response;

// close cURL resource, and free up system resources
curl_close($ch);

echo $jsonData;*/


$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.spotify.com/v1/albums"

    ]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
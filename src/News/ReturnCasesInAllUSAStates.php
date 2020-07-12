<?php
header('Access-Control-Allow-Origin: *');

$url = 'https://covid19api.io/api/v1/CasesInAllUSStates';


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
));


$response = curl_exec($curl);
echo ($response);
return $response;

<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('AllPatronsDataReport.json');

echo($data);
return $data;

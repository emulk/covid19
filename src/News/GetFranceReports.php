<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('FranceReports.json');

echo($data);
return $data;    
?>
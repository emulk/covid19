<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('GlobeReports.json');

echo($data);
return $data;    
?>
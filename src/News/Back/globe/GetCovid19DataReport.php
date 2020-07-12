<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('AllCovid19DataReport.json');

echo($data);
return $data;    
?>
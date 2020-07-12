<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('ItalyReports.json');

echo($data);
return $data;    
?>
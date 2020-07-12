<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('SpainReports.json');

echo($data);
return $data;    
?>
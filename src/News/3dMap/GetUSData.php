<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('FinalUSReports.json');

echo($data);
return $data;    
?>
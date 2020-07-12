<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('AllDataReport.json');

echo($data);
return $data;    
?>
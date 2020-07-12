<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('AllNewDataReport.json');

echo($data);
return $data;    
?>
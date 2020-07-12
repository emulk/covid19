<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('AllUnemploymentDataReport.json');

echo($data);
return $data;    
?>
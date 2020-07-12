<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('GermanyReports.json');

echo($data);
return $data;    
?>
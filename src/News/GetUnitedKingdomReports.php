<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('UnitedKingdomReports.json');

echo($data);
return $data;    
?>
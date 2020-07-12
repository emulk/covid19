<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('AllExperienciesDataReport.json');

echo($data);
return $data;

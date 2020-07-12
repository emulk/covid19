
<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('ReportsTest.json');

echo($data);
return $data;
    
?>
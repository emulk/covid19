
<?php

header('Access-Control-Allow-Origin: *');
$data = file_get_contents('Reports.json');

echo($data);
return $data;
    
?>
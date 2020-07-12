<?php
header('Access-Control-Allow-Origin: *');
$data = file_get_contents('UpdatedTime.txt');
echo ($data);
return $data;
  
?>
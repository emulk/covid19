<?php
header('Access-Control-Allow-Origin: *');
$post_data = $_GET['email'];
if (!empty($post_data)) {
        $post_data =date("Y-m-d h:i:sa")." ".$post_data ."\n";
        $filename = 'emailsignup.txt';
        $handle = fopen($filename, "a");
        fwrite($handle, $post_data);
        fclose($handle);
}
?>
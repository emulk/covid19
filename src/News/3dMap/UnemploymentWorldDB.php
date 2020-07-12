<?php
$servername = "104.248.110.147";
$username = "swankable_dbu";
$password = "D3v3!0p3RM3g9hr05S";
$dbname = "swankable_launch_map";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `UnemploymentWorldReport`";
$conn->query($sql);


//parsing csv file
$isFirstRow = true;
if (($handle = fopen("UnemploymentWorld.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle)) !== FALSE) {
        if (!$isFirstRow) {

            $totalUnemployment = str_replace(',', '', $data[7]);
            $sql = "INSERT INTO `UnemploymentWorldReport`(`State`, `Value`) 
        VALUES ('$data[2]',$totalUnemployment)";
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $isFirstRow = false;
    }
    fclose($handle);
}

<?php
header('Access-Control-Allow-Origin: *');
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


$sql = "SELECT * FROM `GeneralStats` where `Stats`='CovidTotalCases'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $stats=$row['Stats'];
        if($stats == "CovidTotalCases"){

            echo($row['Value']);
            return $row['Value']; 
        }  
    }
}

 
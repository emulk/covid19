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


$sql = "SELECT * FROM CovidUSReport";
$result = $conn->query($sql);

$finalClosureArray = array();
$finalArray = array();
array_push($finalArray, "2000");
$coordinateArray = array();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $UnemploymentCalculatedValue = 0;

        $USstateTmp = $row['USState'];
        $sql2 = "SELECT Value FROM UnemploymentUSReport WHERE USState='$USstateTmp' ";
        $unemployment = $conn->query($sql2);
        if ($unemployment->num_rows > 0) {
            // output data of each row
            while ($rowUnemp = $unemployment->fetch_assoc()) {
                $UnemploymentCalculatedValue = floatval($rowUnemp["Value"]) / 1000000;
            }
        }

        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, $row["Long"]);
        array_push($coordinateArray,  $row["Value"]);

        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, floatval($row["Long"]) + 1);

        array_push($coordinateArray, $UnemploymentCalculatedValue);
    }
} else {
    echo "0 results";
}

array_push($finalArray, $coordinateArray);
array_push($finalClosureArray, $finalArray);

$FinalUSReports = json_encode($finalClosureArray, JSON_NUMERIC_CHECK);
$conn->close();

echo ($FinalUSReports);

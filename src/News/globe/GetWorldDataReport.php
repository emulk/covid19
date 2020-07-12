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


$sql = "SELECT * FROM CovidWorldReport";
$result = $conn->query($sql);

$coordinateArray = array();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $UnemploymentCalculatedValue = 0;

        $stateTmp = $row['State'];
        $sql2 = "SELECT Value FROM UnemploymentWorldReport WHERE State='$stateTmp' ";
        $unemployment = $conn->query($sql2);
        if ($unemployment->num_rows > 0) {
            // output data of each row
            while ($rowUnemp = $unemployment->fetch_assoc()) {
                $UnemploymentCalculatedValue = floatval($rowUnemp["Value"]) / 1000000;
            }
        } else {
            echo $stateTmp . " NOT FOUND" . "<br />";
            continue;
        }

        //echo $stateTmp . " Lat: " . $row["Lat"] . " Long: " . $row["Long"] . " Value: " . $row["Value"] . " Unemployment: " . $UnemploymentCalculatedValue. "<br />";
        //experiences
        array_push($coordinateArray,  floatval($row["Lat"]) + 0.5);
        array_push($coordinateArray, floatval($row["Long"]));
        array_push($coordinateArray,  floatval($UnemploymentCalculatedValue) - 0.5);
        array_push($coordinateArray,  0);
        //patrons
        array_push($coordinateArray,  floatval($row["Lat"]) + 0.4);
        array_push($coordinateArray, floatval($row["Long"]));
        array_push($coordinateArray,  floatval($UnemploymentCalculatedValue) - 0.5);
        array_push($coordinateArray,  1);
        //covid
        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, $row["Long"]);
        array_push($coordinateArray,  floatval($row["TotalCases"] / 100000));
        array_push($coordinateArray, 2);

        //unemployment
        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, floatval($row["Long"]) + 1);
        array_push($coordinateArray, $UnemploymentCalculatedValue);
        array_push($coordinateArray, 3);
    }
} else {
    echo "0 results";
}




$sql = "SELECT * FROM CovidUSReport";
$result = $conn->query($sql);


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

        //experiences
        array_push($coordinateArray,  floatval($row["Lat"]) + 0.4);
        array_push($coordinateArray, floatval($row["Long"]));
        array_push($coordinateArray,  floatval($UnemploymentCalculatedValue) - 0.5);
        array_push($coordinateArray,  0);

        //patrons
        array_push($coordinateArray,  floatval($row["Lat"]) + 0.5);
        array_push($coordinateArray, floatval($row["Long"]));
        array_push($coordinateArray,  floatval($UnemploymentCalculatedValue) - 0.5);
        array_push($coordinateArray,  1);

        //covid
        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, $row["Long"]);
        array_push($coordinateArray,  floatval($row["Value"] / 100));
        array_push($coordinateArray,  2);

        //unemployment
        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, floatval($row["Long"]) + 1);
        array_push($coordinateArray, $UnemploymentCalculatedValue);
        array_push($coordinateArray, 3);
    }
} else {
    echo "0 results";
}


$FinalWorldReports = json_encode($coordinateArray, JSON_NUMERIC_CHECK);
$conn->close();


$myfile = fopen("AllNewDataReport.json", "w") or die("Unable to open file!");
fwrite($myfile, $FinalWorldReports);
fclose($myfile);


//echo ($FinalWorldReports);

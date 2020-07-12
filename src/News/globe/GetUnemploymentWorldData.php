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

$finalClosureArray = array();
$finalArray = array();
array_push($finalArray, "2000");
$coordinateArray = array();

$Covid19Array = array();
$UnemploymentsArray = array();

$ExperienciesArray = array();
$PatronsArray = array();

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

        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, $row["Long"]);
        array_push($coordinateArray,  floatval($row["TotalCases"] / 100000));

        array_push($Covid19Array, $row["Lat"]);
        array_push($Covid19Array, $row["Long"]);
        array_push($Covid19Array,  floatval($row["TotalCases"] / 100000));


        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, floatval($row["Long"]) + 1);
        array_push($coordinateArray, $UnemploymentCalculatedValue);

        array_push($UnemploymentsArray, $row["Lat"]);
        array_push($UnemploymentsArray, floatval($row["Long"]) + 1);
        array_push($UnemploymentsArray, $UnemploymentCalculatedValue);

        array_push($ExperienciesArray,  floatval($row["Lat"]) + 0.5);
        array_push($ExperienciesArray, floatval($row["Long"]) );
        array_push($ExperienciesArray,  floatval($UnemploymentCalculatedValue) - 0.5);

        array_push($PatronsArray,  floatval($row["Lat"]) + 0.5);
        array_push($PatronsArray, floatval($row["Long"]) + 0.5);
        array_push($PatronsArray,  floatval($UnemploymentCalculatedValue) - 0.5);
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

        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, $row["Long"]);
        array_push($coordinateArray,  floatval($row["Value"] / 100));


        array_push($Covid19Array, $row["Lat"]);
        array_push($Covid19Array, $row["Long"]);
        array_push($Covid19Array,  floatval($row["Value"] / 100));

        array_push($coordinateArray, $row["Lat"]);
        array_push($coordinateArray, floatval($row["Long"]) + 1);
        array_push($coordinateArray, $UnemploymentCalculatedValue);

        array_push($UnemploymentsArray, $row["Lat"]);
        array_push($UnemploymentsArray, floatval($row["Long"]) + 1);
        array_push($UnemploymentsArray, $UnemploymentCalculatedValue);

        array_push($ExperienciesArray,  floatval($row["Lat"]) + 0.5);
        array_push($ExperienciesArray, floatval($row["Long"]));
        array_push($ExperienciesArray,  floatval($UnemploymentCalculatedValue) - 0.5);

        array_push($PatronsArray,  floatval($row["Lat"]) + 0.5);
        array_push($PatronsArray, floatval($row["Long"]) + 0.5);
        array_push($PatronsArray,  floatval($UnemploymentCalculatedValue) - 0.5);
    }
} else {
    echo "0 results";
}


array_push($finalArray, $coordinateArray);
array_push($finalClosureArray, $finalArray);

$FinalWorldReports = json_encode($finalClosureArray, JSON_NUMERIC_CHECK);
$conn->close();


$myfile = fopen("AllDataReport.json", "w") or die("Unable to open file!");
fwrite($myfile, $FinalWorldReports);
fclose($myfile);

$myfile = fopen("AllCovid19DataReport.json", "w") or die("Unable to open file!");
fwrite($myfile, json_encode($Covid19Array, JSON_NUMERIC_CHECK));
fclose($myfile);

$myfile = fopen("AllUnemploymentDataReport.json", "w") or die("Unable to open file!");
fwrite($myfile, json_encode($UnemploymentsArray, JSON_NUMERIC_CHECK));
fclose($myfile);

$myfile = fopen("AllPatronsDataReport.json", "w") or die("Unable to open file!");
fwrite($myfile, json_encode($PatronsArray, JSON_NUMERIC_CHECK));
fclose($myfile);

$myfile = fopen("AllExperienciesDataReport.json", "w") or die("Unable to open file!");
fwrite($myfile, json_encode($ExperienciesArray, JSON_NUMERIC_CHECK));
fclose($myfile);

//echo ($FinalWorldReports);

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

$sql = "DELETE FROM `CovidWorldReport`";
$conn->query($sql);

$url = 'https://covid19api.io/api/v1/AllReports';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$response = rtrim($response, "\0");

$decodedResponse = json_decode($response, true);
unset($decodedResponse["reports"][0]["table"][0]);
unset($decodedResponse["reports"][0]["table"][2]);
//$decodedResponse = json_encode($decodedResponse);

//var_dump($decodedResponse["reports"][0]["table"][1]);

$reportTable = $decodedResponse["reports"][0]["table"][1];
function findStateStats($state, $lat, $long)
{
  global $conn, $reportTable;
  foreach ($reportTable as $covidNumber) {

    if ($covidNumber["Country"] == $state) {
      $StateName = $covidNumber["Country"];
      $totalCases = str_replace(',', '', $covidNumber["TotalCases"]);

      $sql = "INSERT INTO `CovidWorldReport`(`State`, `Lat`, `Long`, `TotalCases`) 
        VALUES ('$StateName',$lat,$long ,$totalCases)";

      if ($conn->query($sql) === TRUE) {
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      break;
    }
  }
}


//parsing csv file
$row = 1;
if (($handle = fopen("world.csv", "r")) !== FALSE) {
  $PrecedentState = "";
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    if ($data[0] != $PrecedentState) {
      $num = count($data);
      $row++;

      findStateStats($data[0], $data[2], $data[3]);
      //$stateDetails = $data[0] . " , " . $data[1] . " , " . strval($data[2]) . " , " . strval($data[3]);

      //echo $stateDetails . "<br />\n";
    }
    $PrecedentState = $data[0];
  }
  fclose($handle);
}

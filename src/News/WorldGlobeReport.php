<?php


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
function findStateStats($state, $Lat, $Long)
{
  global $conn, $reportTable;
  foreach ($reportTable as $covidNumber) {

    if ($covidNumber["Country"] == $state) {
      $StateName = $covidNumber["Country"];
      $totalCases = floatval( $covidNumber["TotalCases"]);
      $toalDeaths = floatval($covidNumber["TotalDeaths"]);
      $toalRecovered = floatval($covidNumber["TotalRecovered"]);
      $activeCases = floatval($covidNumber["ActiveCases"]);
  
       //confirmed Cases
       array_push($finalArray,  floatval($Lat));
       array_push($finalArray, floatval($Long));
       array_push($finalArray,  floatval($totalCases));
       array_push($finalArray,  0);

       //deaths Cases
       array_push($finalArray,  floatval($Lat) + 0.1);
       array_push($finalArray, floatval($Long));
       array_push($finalArray,  floatval($toalDeaths));
       array_push($finalArray,  1);

       //Recovered Cases
       array_push($finalArray,  floatval($Lat) + 0.2);
       array_push($finalArray, floatval($Long));
       array_push($finalArray,  floatval($toalRecovered));
       array_push($finalArray,  2);

       //Active Cases
       array_push($finalArray,  floatval($Lat) + 0.3);
       array_push($finalArray, floatval($Long));
       array_push($finalArray,  floatval($activeCases));
       array_push($finalArray,  3);
     

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

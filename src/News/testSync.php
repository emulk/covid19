
<?php
header('Access-Control-Allow-Origin: *');


/************************** REGION DATA ******************/
//Italy
$saveData = false;
$dateNow = date("m-d-Y", strtotime("-1 days"));


$url = 'https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/csse_covid_19_data/csse_covid_19_daily_reports/' . $dateNow . '.csv';
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


$finalArray = array();

if ($response) {
  $isFirstRow = true;
  if (($data = str_getcsv($response, "\n")) !== FALSE) {
    if (sizeof($data) > 1) {
      $Count = 0;
      foreach ($data as &$value) {
        $State = str_getcsv($value);
        if (!$isFirstRow  && (($State[3]=='US' && $Count < 200) || $State[3] != 'US')&&floatval($State[7]) > 0 && floatval($State[8] > 0 && floatval($State[9]) >= 0 && floatval($State[10]) > 0) && strlen($State[5]) > 0 && strlen($State[6]) > 0) {
          if($State[3]=='US'){
            $Count++;
          
          }
          //confirmed Cases
          array_push($finalArray,  floatval($State[5]));
          array_push($finalArray, floatval($State[6]));
          array_push($finalArray,  floatval($State[7]));
          array_push($finalArray,  0);

          //deaths Cases
          array_push($finalArray,  floatval($State[5]) + 0.1);
          array_push($finalArray, floatval($State[6]));
          array_push($finalArray,  floatval($State[8]));
          array_push($finalArray,  1);

          //Recovered Cases
          array_push($finalArray,  floatval($State[5]) + 0.2);
          array_push($finalArray, floatval($State[6]));
          array_push($finalArray,  floatval($State[9]));
          array_push($finalArray,  2);

          //Active Cases
          array_push($finalArray,  floatval($State[5]) + 0.3);
          array_push($finalArray, floatval($State[6]));
          array_push($finalArray,  floatval($State[10]));
          array_push($finalArray,  3);
        }

        $isFirstRow = false;
      }

      $saveData = true;
    }
  }
}

if ($saveData) {

  $FinalReports = json_encode($finalArray);
  //save data into files
  $finalfile = fopen("GlobeReports.json", "w") or die("Unable to open file!");
  fwrite($finalfile, $FinalReports);
  fclose($finalfile);

  echo ("Globe Reports Saved <br/>");
}

?>
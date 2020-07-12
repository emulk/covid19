
<?php
header('Access-Control-Allow-Origin: *');

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
$decodedResponse = json_encode($decodedResponse);


$myfile = fopen("Reports.json", "w") or die("Unable to open file!");
fwrite($myfile, $decodedResponse);
fclose($myfile);

echo ("All Reports Saved <br/>");

/************************** REGION DATA ******************/
//Italy


$saveData = false;
$dateNow = date("m-d-Y",strtotime("-1 days"));


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

$italyArray = array();
$spainArray = array();
$germanyArray = array();
$unitedKingdomArray = array();
$franceArray = array();

if ($response) {
  $isFirstRow = true;
  if (($data = str_getcsv($response, "\n")) !== FALSE) {
    if (sizeof($data) > 1) {
      foreach ($data as &$value) {
        $State = str_getcsv($value);
        if ($State[3] == "Italy") {
          array_push($italyArray, $value);
        } else if ($State[3] == "Spain") {
          array_push($spainArray, $value);
        } else if ($State[3] == "Germany") {
          array_push($germanyArray, $value);
        } else if ($State[3] == "United Kingdom") {
          array_push($unitedKingdomArray, $value);
        } else if ($State[3] == "France") {
          array_push($franceArray, $value);
        }
      }

      $saveData = true;
    }
  }
}

if ($saveData) {

  $ItalyReports = json_encode($italyArray);
  //save data into files
  $italyfile = fopen("ItalyReports.json", "w") or die("Unable to open file!");
  fwrite($italyfile, $ItalyReports);
  fclose($italyfile);

  echo ("Italy Reports Saved <br/>");

  $SpainReports = json_encode($spainArray);
  $spainfile = fopen("SpainReports.json", "w") or die("Unable to open file!");
  fwrite($spainfile, $SpainReports);
  fclose($spainfile);

  echo ("Spain Reports Saved <br/>");

  $GermanyReports = json_encode($germanyArray);
  $germanyfile = fopen("GermanyReports.json", "w") or die("Unable to open file!");
  fwrite($germanyfile, $GermanyReports);
  fclose($germanyfile);

  echo ("Germany Reports Saved <br/>");

  //United Kingdom
  $UnitedKingdomReports = json_encode($unitedKingdomArray);
  $unitedKingdomfile = fopen("UnitedKingdomReports.json", "w") or die("Unable to open file!");
  fwrite($unitedKingdomfile, $UnitedKingdomReports);
  fclose($unitedKingdomfile);

  echo ("United Kingdom Reports Saved <br/>");

  //France
  $FranceReports = json_encode($franceArray);
  $francefile = fopen("FranceReports.json", "w") or die("Unable to open file!");
  fwrite($francefile, $FranceReports);
  fclose($francefile);

  echo ("France Reports Saved <br/>");
}
/****************************** Updated Time *****************************/
$updateTime = date("m/d/Y - h:i");
$myfile = fopen("UpdatedTime.txt", "w") or die("Unable to open file!");
fwrite($myfile, $updateTime);
fclose($myfile);

echo ($updateTime);

?>
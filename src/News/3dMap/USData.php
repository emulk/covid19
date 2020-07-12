
<?php
header('Access-Control-Allow-Origin: *');

$url = 'https://covid19api.io/api/v1/CasesInAllUSStates';


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

//$response = rtrim($response, "\0");
//echo($response);
$decodedResponse = json_decode($response, true);
$decodedJsonResponse = $decodedResponse["data"][0]["table"];
//var_dump($decodedResponse["data"][0]["table"][0]);
/*

$decodedResponse = json_encode($decodedResponse);


$myfile = fopen("Reports.json", "w") or die("Unable to open file!");
fwrite($myfile, $decodedResponse);
fclose($myfile);
*/

$arrayUnemploymentRate = array(
    222362.613,
    41968.962,
    315639.568,
    127622.62,
    3015005.784,
    312443.34,
    166431.888,
    74653.578,
    1407823.415,
    475313.483,
    143255.298,
    78645.562,
    955597.096,
    410501.43,
    168811,
    150526,
    223361.16,
    272184.633,
    61871.784,
    308150.37,
    575401.084,
    1007268.816,
    303731.901,
    128179.44,
    304244.421,
    46984.86,
    54766.816,
    350337.702,
    105302.335,
    687354.488,
    83263.588,
    1318001.715,
    622051.029,
    36602.111,
    786924.027,
    229440.708,
    301017.848,
    847615.85,
    85115.177,
    302724.125,
    43656.232,
    373061.703,
    1754708.28,
    136922.505,
    43586.273,
    406064.302,
    595468.651,
    100569.561,
    371610.48,
    25924.624
);



$finalClosureArray = array();
$finalArray = array();
array_push($finalArray, "2000");
$coordinateArray = array();

$Count = 0;

foreach ($decodedJsonResponse as $State) {
    $toalCases = str_replace(',', '.', $State["TotalCases"]) /1000;
    if ($State["USAState"] == "Alabama") {
        $Lat = "32.31823";
        $Long = "-86.902298";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);

        $Count++;
    } else  if ($State["USAState"] == "Alaska") {
        $Lat = "66.160507";
        $Long = "-153.369141";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);

        $Count++;
    } else  if ($State["USAState"] == "Arizona") {
        $Lat = "34.048927";
        $Long = "-111.093735";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Arkansas") {
        $Lat = "34.799999";
        $Long = "-92.199997";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "California") {
        $Lat = "36.778259";
        $Long = "-119.417931";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Colorado") {
        $Lat = "39.113014";
        $Long = "-105.358887";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Connecticut") {
        $Lat =  "41.599998";
        $Long = "-72.699997";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Delaware") {
        $Lat = "39";
        $Long = "-75.5";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Florida") {
        $Lat = "27.994402";
        $Long = "-81.760254";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Georgia") {
        $Lat = "33.247875";
        $Long =  "-83.441162";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Hawaii") {
        $Lat = "19.741755";
        $Long = "-155.844437";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Idaho") {
        $Lat = "44.068203";
        $Long = "-114.742043";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Illinois") {
        $Lat = "40";
        $Long = "-89";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Indiana") {
        $Lat = "40.273502";
        $Long = "-86.126976";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Iowa") {
        $Lat = "42.032974";
        $Long = "-93.581543";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Kansas") {
        $Lat =  "38.5";
        $Long = "-98";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Kentucky") {
        $Lat = "37.839333";
        $Long = "-84.27002";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Louisiana") {
        $Lat = "30.39183";
        $Long = "-92.329102";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Maine") {
        $Lat = "45.367584";
        $Long = "-68.972168";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Maryland") {
        $Lat = "39.045753";
        $Long = "-76.641273";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Massachusetts") {
        $Lat = "42.407211";
        $Long = "-71.382439";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Michigan") {
        $Lat = "44.182205";
        $Long = "-84.506836";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Minnesota") {
        $Lat = "46.39241";
        $Long = "-94.63623";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Mississippi") {
        $Lat = "33";
        $Long = "-90";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Missouri") {
        $Lat = "38.573936";
        $Long = "-92.60376";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Montana") {
        $Lat = "46.96526";
        $Long = "-109.533691";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Nebraska") {
        $Lat = "41.5";
        $Long = "-100";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Nevada") {
        $Lat = "39.876019";
        $Long = "-117.224121";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "New Hampshire") {
        $Lat = "44";
        $Long = "-71.5";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "New Jersey") {
        $Lat = "39.833851";
        $Long = "-74.871826";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "New Mexico") {
        $Lat =  "34.307144";
        $Long = "-106.018066";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "New York") {
        $Lat = "43";
        $Long = "-75";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "North Carolina") {
        $Lat = "35.782169";
        $Long = "-80.793457";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "North Dakota") {
        $Lat = "47.650589";
        $Long = "-100.437012";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Ohio") {
        $Lat =  "40.367474";
        $Long = "-82.996216";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Oklahoma") {
        $Lat = "36.084621";
        $Long = "-96.921387";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Oregon") {
        $Lat = "44";
        $Long = "-120.5";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Pennsylvania") {
        $Lat = "41.203323";
        $Long = "-77.194527";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Rhode Island") {
        $Lat =  "41.5";
        $Long = "-100";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "South Carolina") {
        $Lat = "33.836082";
        $Long = "-81.163727";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "South Dakota") {
        $Lat = "44.5";
        $Long = "-100";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Tennessee") {
        $Lat = "35.860119";
        $Long = "-86.660156";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Texas") {
        $Lat =  "31";
        $Long = "-100";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray,  $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Utah") {
        $Lat = "39.41922";
        $Long = "-111.950684";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Vermont") {
        $Lat = "44";
        $Long = "-72.699997";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Virginia") {
        $Lat = "37.926868";
        $Long = "-78.024902";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Washington") {
        $Lat = "47.751076";
        $Long = "-120.740135";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "West Virginia") {
        $Lat = "39";
        $Long = "-80.5";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else if ($State["USAState"] == "Wisconsin") {
        $Lat = "44.5";
        $Long = "-89.5";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else  if ($State["USAState"] == "Wyoming") {
        $Lat = "43.07597";
        $Long =  "-107.290283";
        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, $Long);
        array_push($coordinateArray, $toalCases);

        array_push($coordinateArray, $Lat);
        array_push($coordinateArray, floatval($Long)+1);
        array_push($coordinateArray, $arrayUnemploymentRate[$Count]/1000000);
        
        $Count++;
    } else {
        //echo($State["USAState"]." NOT FOUND");
    }
}

array_push($finalArray, $coordinateArray);
array_push($finalClosureArray, $finalArray);

$FinalUSReports = json_encode($finalClosureArray, JSON_NUMERIC_CHECK);
//echo ($FinalUSReports);

//save data into files
$usfile = fopen("FinalUSReports.json", "w") or die("Unable to open file!");
fwrite($usfile, $FinalUSReports);
fclose($usfile);

?>
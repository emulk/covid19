<?php


$UsStateName = "";

$saveData = true;
$finalArray = array();



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

$decodedResponse = json_decode($response, true);
$decodedJsonResponse = $decodedResponse["data"][0]["table"];

foreach ($decodedJsonResponse as $State) {
    $toalCases = floatval($State["TotalCases"]);
    $toalDeaths = floatval($State["TotalDeaths"]);
    //$toalDeaths = floatval($State["TotalDeaths"]);
    $activeCases = floatval($State["ActiveCases"]);
    $saveData = true;
    if ($State["USAState"] == "Alabama") {
        $UsStateName = "Alabama";
        $Lat = "32.31823";
        $Long = "-86.902298";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Alaska") {
        $UsStateName = "Alaska";
        $Lat = "66.160507";
        $Long = "-153.369141";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Arizona") {
        $UsStateName = "Arizona";
        $Lat = "34.048927";
        $Long = "-111.093735";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Arkansas") {
        $UsStateName = "Arkansas";
        $Lat = "34.799999";
        $Long = "-92.199997";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "California") {
        $UsStateName = "California";
        $Lat = "36.778259";
        $Long = "-119.417931";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Colorado") {
        $UsStateName = "Colorado";
        $Lat = "39.113014";
        $Long = "-105.358887";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Connecticut") {
        $UsStateName = "Connecticut";
        $Lat =  "41.599998";
        $Long = "-72.699997";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Delaware") {
        $UsStateName = "Delaware";
        $Lat = "39";
        $Long = "-75.5";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Florida") {
        $UsStateName = "Florida";
        $Lat = "27.994402";
        $Long = "-81.760254";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Georgia") {
        $UsStateName = "Georgia";
        $Lat = "33.247875";
        $Long =  "-83.441162";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Hawaii") {
        $UsStateName = "Hawaii";
        $Lat = "19.741755";
        $Long = "-155.844437";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Idaho") {
        $UsStateName = "Idaho";
        $Lat = "44.068203";
        $Long = "-114.742043";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Illinois") {
        $UsStateName = "Illinois";
        $Lat = "40";
        $Long = "-89";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Indiana") {
        $UsStateName = "Indiana";
        $Lat = "40.273502";
        $Long = "-86.126976";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Iowa") {
        $UsStateName = "Iowa";
        $Lat = "42.032974";
        $Long = "-93.581543";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Kansas") {
        $UsStateName = "Kansas";
        $Lat =  "38.5";
        $Long = "-98";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Kentucky") {
        $UsStateName = "Kentucky";
        $Lat = "37.839333";
        $Long = "-84.27002";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Louisiana") {
        $UsStateName = "Louisiana";
        $Lat = "30.39183";
        $Long = "-92.329102";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Maine") {
        $UsStateName = "Maine";
        $Lat = "45.367584";
        $Long = "-68.972168";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Maryland") {
        $UsStateName = "Maryland";
        $Lat = "39.045753";
        $Long = "-76.641273";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Massachusetts") {
        $UsStateName = "Massachusetts";
        $Lat = "42.407211";
        $Long = "-71.382439";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Michigan") {
        $UsStateName = "Michigan";
        $Lat = "44.182205";
        $Long = "-84.506836";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Minnesota") {
        $UsStateName = "Minnesota";
        $Lat = "46.39241";
        $Long = "-94.63623";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Mississippi") {
        $UsStateName = "Mississippi";
        $Lat = "33";
        $Long = "-90";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Missouri") {
        $UsStateName = "Missouri";
        $Lat = "38.573936";
        $Long = "-92.60376";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Montana") {
        $UsStateName = "Montana";
        $Lat = "46.96526";
        $Long = "-109.533691";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Nebraska") {
        $UsStateName = "Nebraska";
        $Lat = "41.5";
        $Long = "-100";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Nevada") {
        $UsStateName = "Nevada";
        $Lat = "39.876019";
        $Long = "-117.224121";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "New Hampshire") {
        $UsStateName = "New Hampshire";
        $Lat = "44";
        $Long = "-71.5";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "New Jersey") {
        $UsStateName = "New Jersey";
        $Lat = "39.833851";
        $Long = "-74.871826";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "New Mexico") {
        $UsStateName = "New Mexico";
        $Lat =  "34.307144";
        $Long = "-106.018066";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "New York") {
        $UsStateName = "New York";
        $Lat = "43";
        $Long = "-75";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "North Carolina") {
        $UsStateName = "North Carolina";
        $Lat = "35.782169";
        $Long = "-80.793457";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "North Dakota") {
        $UsStateName = "North Dakota";
        $Lat = "47.650589";
        $Long = "-100.437012";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Ohio") {
        $UsStateName = "Ohio";
        $Lat =  "40.367474";
        $Long = "-82.996216";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Oklahoma") {
        $UsStateName = "Oklahoma";
        $Lat = "36.084621";
        $Long = "-96.921387";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Oregon") {
        $UsStateName = "Oregon";
        $Lat = "44";
        $Long = "-120.5";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Pennsylvania") {
        $UsStateName = "Pennsylvania";
        $Lat = "41.203323";
        $Long = "-77.194527";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Rhode Island") {
        $UsStateName = "Rhode Island";
        $Lat =  "41.5";
        $Long = "-100";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "South Carolina") {
        $UsStateName = "South Carolina";
        $Lat = "33.836082";
        $Long = "-81.163727";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "South Dakota") {
        $UsStateName = "South Dakota";
        $Lat = "44.5";
        $Long = "-100";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Tennessee") {
        $UsStateName = "Tennessee";
        $Lat = "35.860119";
        $Long = "-86.660156";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Texas") {
        $UsStateName = "Texas";
        $Lat =  "31";
        $Long = "-100";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Utah") {
        $UsStateName = "Utah";
        $Lat = "39.41922";
        $Long = "-111.950684";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Vermont") {
        $UsStateName = "Vermont";
        $Lat = "44";
        $Long = "-72.699997";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Virginia") {
        $UsStateName = "Virginia";
        $Lat = "37.926868";
        $Long = "-78.024902";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Washington") {
        $UsStateName = "Washington";
        $Lat = "47.751076";
        $Long = "-120.740135";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "West Virginia") {
        $UsStateName = "West Virginia";
        $Lat = "39";
        $Long = "-80.5";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else if ($State["USAState"] == "Wisconsin") {
        $UsStateName = "Wisconsin";
        $Lat = "44.5";
        $Long = "-89.5";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else  if ($State["USAState"] == "Wyoming") {
        $UsStateName = "Wyoming";
        $Lat = "43.07597";
        $Long =  "-107.290283";

        //confirmed Cases
        array_push($finalArray,  floatval($Lat));
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalCases));
        array_push($finalArray,  0);

        //deaths Cases
        array_push($finalArray,  floatval($Lat) + 0.1);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($toalDeaths));
        array_push($finalArray,  1);

        //Recovered Cases
        array_push($finalArray,  floatval($Lat) + 0.2);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval(0));
        array_push($finalArray,  2);

        //Active Cases
        array_push($finalArray,  floatval($Lat) + 0.3);
        array_push($finalArray, floatval($Long));
        array_push($finalArray,  floatval($activeCases));
        array_push($finalArray,  3);
    } else {
        //echo($State["USAState"]." NOT FOUND");
    }
}



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
    global  $reportTable, $finalArray;
    foreach ($reportTable as $covidNumber) {

        if ($covidNumber["Country"] == $state) {
            $StateName = $covidNumber["Country"];
            $totalCases = floatval($covidNumber["TotalCases"]);
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
if (($handle = fopen("world.csv", "r")) !== FALSE) {
    $PrecedentState = "";
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if ($data[0] != $PrecedentState) {
            findStateStats($data[0], $data[2], $data[3]);
            //$stateDetails = $data[0] . " , " . $data[1] . " , " . strval($data[2]) . " , " . strval($data[3]);
            //echo $stateDetails . "<br />\n";
        }
        $PrecedentState = $data[0];
    }
    fclose($handle);
}





if ($saveData) {

    $FinalReports = json_encode($finalArray);
    //save data into files
    $finalfile = fopen("GlobeReports.json", "w") or die("Unable to open file!");
    fwrite($finalfile, $FinalReports);
    fclose($finalfile);

    echo ("Globe Reports Saved <br/>");
}

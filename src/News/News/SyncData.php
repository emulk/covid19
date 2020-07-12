
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


/************************** REGION DATA ******************/
$url = 'https://covid19api.io/api/v1/JohnsHopkinsDataDailyReport';
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
    $decodedResponse = $decodedResponse["data"]["table"];
   // var_dump($decodedResponse["data"]["table"]);
      
    $italy=array();
    
    foreach($decodedResponse as $State){
      if($State["Country_Region"] == "Italy"){
        array_push($italy,$State);
      }
    }
    $ItalyReports = json_encode($italy);

    $myfile = fopen("ItalyReports.json", "w") or die("Unable to open file!");
    fwrite($myfile, $ItalyReports);
    fclose($myfile);

        

    $updateTime= date("m/d/Y - h:i");
    $myfile = fopen("UpdatedTime.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $updateTime);
    fclose($myfile);
    
    echo($updateTime);
    
?>
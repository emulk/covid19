
<?php

header('Access-Control-Allow-Origin: *');

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



    
?>
<?php
header('Access-Control-Allow-Origin: *');

$url = 'https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/csse_covid_19_data/csse_covid_19_daily_reports/06-29-2020.csv';
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


$italyArray=array();    

if($response){
    $isFirstRow = true;
    if (($data = str_getcsv($response, "\n")) !== FALSE) {
        foreach ($data as &$value) {
            $StateValue = str_getcsv($value);
            //echo $StateValue[3] ."<br />";
            if($StateValue[3]=="Italy"){
                echo $value."<br />";
                array_push($italyArray,$value);
            }
        }
    }
    
}


$ItalyReports = json_encode($italyArray);
//save data into files
$italyfile = fopen("ItalyReports.json", "w") or die("Unable to open file!");
fwrite($italyfile, $ItalyReports);
fclose($italyfile);


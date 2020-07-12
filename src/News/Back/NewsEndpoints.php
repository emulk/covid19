<?php


/**
 * 
 * https://newsapi.org/v2/top-headlines?country=us&apiKey=efdb21b0f09448deb1be033e0a7830bf
 * 
 * https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=efdb21b0f09448deb1be033e0a7830bf
 * 
 * https://newsapi.org/v2/top-headlines?country=de&category=business&apiKey=efdb21b0f09448deb1be033e0a7830bf
 * 
 * country
The 2-letter ISO 3166-1 code of the country you want to get headlines for. Possible options: 
  ae ar at au be bg br ca ch cn co cu cz de eg fr gb gr hk hu id ie il in it jp kr lt lv ma mx 
  my ng nl no nz ph pl pt ro rs ru sa se sg si sk th tr tw ua us ve za . 
  Note: you can't mix this param with the sources param
 * 
 * 
 * https://newsapi.org/v2/top-headlines?q=trump&apiKey=efdb21b0f09448deb1be033e0a7830bf
 */

header('Access-Control-Allow-Origin: *');
//$post_data = $_POST['log'];
$post_data = $_GET['log'];
$get_news_data = $_GET['news'];
$get_covid_data = $_GET['covid'];
 if(!empty($get_covid_data)){
   if($get_covid_data == 'us'){
    $url = 'https://newsapi.org/v2/top-headlines?country=us&q=coronavirus&apiKey=efdb21b0f09448deb1be033e0a7830bf';
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
  
    echo($response);
    return $response;
   }else{
    $url = 'https://newsapi.org/v2/top-headlines?country=gb&q=coronavirus&apiKey=efdb21b0f09448deb1be033e0a7830bf';
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
  
    echo($response);
    return $response;
   }

}
    

?>
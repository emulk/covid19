<?php

error_reporting(E_ALL);


    // Generates boundary
    $mail_boundary = "=_NextPart_" . md5(uniqid(time()));

    $to = "orgest.shehaj@studio.unibo.it";
    $subject = "COVID19 Real Time News";
    $sender = "info@ncovid19.it";


    $headers = "From: $sender\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: multipart/alternative;\n\tboundary=\"$mail_boundary\"\n";
    $headers .= "X-Mailer: PHP " . phpversion();


    $msg = "\n--$mail_boundary\n";
    $msg .= "Content-Type: text/html; charset=\"UTF-8\"\n";
    $msg .= "Content-Transfer-Encoding: 8bit\n\n";
    $msg .= " 

    <h1>
    <a href='https://www.ncovid19.it/'>COVID19 Real Time News</a></H1>
    <br />
    The current COVID-19 pandemic is unprecedented, but the global response aims to improve coordination between scientists and global health professionals, accelerate the research and development process, and develop new norms and standards to learn from and improve upon the global response.
    <br />
    COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019. COVID-19 is now a pandemic affecting many countries globally.
    <br />
    The most common symptoms of COVID-19 are fever, dry cough, and tiredness. Other symptoms that are less common and may affect some patients include aches and pains, nasal congestion, headache, conjunctivitis, sore throat, diarrhea, loss of taste or smell or a rash on skin or discoloration of fingers or toes. These symptoms are usually mild and begin gradually. Some people become infected but only have very mild symptoms.
    <br />
    Most people (about 80%) recover from the disease without needing hospital treatment.
    <br />
    People can catch COVID-19 from others who have the virus. The disease spreads primarily from person to person through small droplets from the nose or mouth, which are expelled when a person with COVID-19 coughs, sneezes, or speaks.
    <br />
    The most effective ways to protect yourself and others against COVID-19 are to:
    <br />
    <br />
    <li>Clean your hands frequently and thoroughly. </li>   <br />
    <li>Avoid touching your eyes, mouth and nose.  </li>  <br />
    <li>Cover your cough with the bend of elbow or tissue. If a tissue is used, discard it immediately and wash your hands.  </li>  <br />
    <li>Maintain a distance of at least 1 metre from others. </li>   <br />
    <br />
    ElegantWeb has created a new Covid-19 tracker.    <br />
    Follow the url , and stay up to date.    <br />
    <br />
    https://www.ncovid19.it/


    ";  // HTML format text

    // Ending Boundary multipart/alternative
    $msg .= "\n--$mail_boundary--\n";

    // Return-Path setup (to be used only on windows servers)
    ini_set("sendmail_from", $sender);

    // Send the message, the fifth paramter set the Return-Path "-f$sender" on Linux Hosting
    //UNCOMENT to make it work

    if (mail($to, $subject, $msg, $headers, "-f$sender")) { 
        echo " Mail sent successfully to:"."<br/><br/>";
    } else { 
        echo "<br><br>Mail delivery failed!";
    }
    
    

?>
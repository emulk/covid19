
<?php

header('Access-Control-Allow-Origin: *');


$data ='
{"reports":[{"cases":6076045,"deaths":367768,"recovered":2690371,"active_cases":[{"currently_infected_patients":3017906,"inMidCondition":2964322,"criticalStates":53584}],"closed_cases":[{"cases_which_had_an_outcome":3058139,"recovered":2690371,"deaths":367768}]}]}
';


    echo($data);
    return $data;

    
?>
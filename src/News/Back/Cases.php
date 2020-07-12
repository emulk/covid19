
<?php

header('Access-Control-Allow-Origin: *');


$data ='
{"reports":[{"cases":5649202,"deaths":350333,"recovered":2413908,"active_cases":[{"currently_infected_patients":2884961,"inMidCondition":2831959,"criticalStates":53002}],"closed_cases":[{"cases_which_had_an_outcome":2764241,"recovered":2413908,"deaths":350333}]}]}
';


    echo($data);
    return $data;

    
?>
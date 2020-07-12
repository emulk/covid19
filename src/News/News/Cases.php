
<?php

header('Access-Control-Allow-Origin: *');


$data ='
{"reports":[{"cases":6183377,"deaths":371362,"recovered":2753886,"active_cases":[{"currently_infected_patients":3058129,"inMidCondition":3004672,"criticalStates":53457}],"closed_cases":[{"cases_which_had_an_outcome":3125248,"recovered":2753886,"deaths":371362}]}]}
';


    echo($data);
    return $data;

    
?>
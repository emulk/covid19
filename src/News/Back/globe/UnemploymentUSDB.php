<?php
$servername = "104.248.110.147";
$username = "swankable_dbu";
$password = "D3v3!0p3RM3g9hr05S";
$dbname = "swankable_launch_map";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM `UnemploymentUSReport`";
$conn->query($sql);



$arrayUnemploymentState = array(
    "Alabama",
    "Alaska",
    "Arizona",
    "Arkansas",
    "California	",
    "Colorado	",
    "Connecticut	",
    "Delaware	",
    "Florida	",
    "Georgia	",
    "Hawaii	",
    "Idaho	",
    "Illinois	",
    "Indiana	",
    "Iowa	",
    "Kansas	",
    "Kentucky	",
    "Louisiana	",
    "Maine	",
    "Maryland	",
    "Massachusetts	",
    "Michigan	",
    "Minnesota	",
    "Mississippi	",
    "Missouri	",
    "Montana	",
    "Nebraska	",
    "Nevada	",
    "New Hampshire	",
    "New Jersey	",
    "New Mexico	",
    "New York",
    "North Carolina	",
    "North Dakota	",
    "Ohio	",
    "Oklahoma	",
    "Oregon	",
    "Pennsylvania	",
    "Rhode Island	",
    "South Carolina	",
    "South Dakota	",
    "Tennessee	",
    "Texas	",
    "Utah	",
    "Vermont	",
    "Virginia	",
    "Washington	",
    "West Virginia	",
    "Wisconsin	",
    "Wyoming	"
);



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


$Count = 0;
$totalUnemployment = 0;

foreach ($arrayUnemploymentState as $State) {
    $USStateTmp = trim($arrayUnemploymentState[$Count]);
    $sql = "INSERT INTO `UnemploymentUSReport`(`USState`, `Value`) 
    VALUES ('$USStateTmp',$arrayUnemploymentRate[$Count])";
    $totalUnemployment += $arrayUnemploymentRate[$Count];
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $Count++;
}

$sql = "INSERT INTO `GeneralStats`(`Stats`, `Value`) 
VALUES ('UnemploymentTotalCases' ,$totalUnemployment)";

echo $totalUnemployment;

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
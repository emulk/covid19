<?php

header('Access-Control-Allow-Origin: *');

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
$sql = "DELETE FROM `CovidUSReport`";
$conn->query($sql);

$sql = "DELETE FROM `GeneralStats` where `Stats`='CovidTotalCases'";
$conn->query($sql);

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

$UsStateName = "";

foreach ($decodedJsonResponse as $State) {
    $toalCases = str_replace(',', '.', $State["TotalCases"]) / 1000;

    if ($State["USAState"] == "USA Total") {
        $USTotalCases =  intval( str_replace(',', '', $State["TotalCases"]));
        $sql = "INSERT INTO `GeneralStats`(`Stats`, `Value`) 
        VALUES ('CovidTotalCases' ,$USTotalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if ($State["USAState"] == "Alabama") {
        $UsStateName = "Alabama";
        $Lat = "32.31823";
        $Long = "-86.902298";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Alaska") {
        $UsStateName = "Alaska";
        $Lat = "66.160507";
        $Long = "-153.369141";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Arizona") {
        $UsStateName = "Arizona";
        $Lat = "34.048927";
        $Long = "-111.093735";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Arkansas") {
        $UsStateName = "Arkansas";
        $Lat = "34.799999";
        $Long = "-92.199997";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "California") {
        $UsStateName = "California";
        $Lat = "36.778259";
        $Long = "-119.417931";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Colorado") {
        $UsStateName = "Colorado";
        $Lat = "39.113014";
        $Long = "-105.358887";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Connecticut") {
        $UsStateName = "Connecticut";
        $Lat =  "41.599998";
        $Long = "-72.699997";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Delaware") {
        $UsStateName = "Delaware";
        $Lat = "39";
        $Long = "-75.5";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Florida") {
        $UsStateName = "Florida";
        $Lat = "27.994402";
        $Long = "-81.760254";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Georgia") {
        $UsStateName = "Georgia";
        $Lat = "33.247875";
        $Long =  "-83.441162";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Hawaii") {
        $UsStateName = "Hawaii";
        $Lat = "19.741755";
        $Long = "-155.844437";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Idaho") {
        $UsStateName = "Idaho";
        $Lat = "44.068203";
        $Long = "-114.742043";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Illinois") {
        $UsStateName = "Illinois";
        $Lat = "40";
        $Long = "-89";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Indiana") {
        $UsStateName = "Indiana";
        $Lat = "40.273502";
        $Long = "-86.126976";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Iowa") {
        $UsStateName = "Iowa";
        $Lat = "42.032974";
        $Long = "-93.581543";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Kansas") {
        $UsStateName = "Kansas";
        $Lat =  "38.5";
        $Long = "-98";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Kentucky") {
        $UsStateName = "Kentucky";
        $Lat = "37.839333";
        $Long = "-84.27002";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Louisiana") {
        $UsStateName = "Louisiana";
        $Lat = "30.39183";
        $Long = "-92.329102";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Maine") {
        $UsStateName = "Maine";
        $Lat = "45.367584";
        $Long = "-68.972168";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Maryland") {
        $UsStateName = "Maryland";
        $Lat = "39.045753";
        $Long = "-76.641273";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Massachusetts") {
        $UsStateName = "Massachusetts";
        $Lat = "42.407211";
        $Long = "-71.382439";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Michigan") {
        $UsStateName = "Michigan";
        $Lat = "44.182205";
        $Long = "-84.506836";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Minnesota") {
        $UsStateName = "Minnesota";
        $Lat = "46.39241";
        $Long = "-94.63623";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Mississippi") {
        $UsStateName = "Mississippi";
        $Lat = "33";
        $Long = "-90";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Missouri") {
        $UsStateName = "Missouri";
        $Lat = "38.573936";
        $Long = "-92.60376";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Montana") {
        $UsStateName = "Montana";
        $Lat = "46.96526";
        $Long = "-109.533691";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Nebraska") {
        $UsStateName = "Nebraska";
        $Lat = "41.5";
        $Long = "-100";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Nevada") {
        $UsStateName = "Nevada";
        $Lat = "39.876019";
        $Long = "-117.224121";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "New Hampshire") {
        $UsStateName = "New Hampshire";
        $Lat = "44";
        $Long = "-71.5";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "New Jersey") {
        $UsStateName = "New Jersey";
        $Lat = "39.833851";
        $Long = "-74.871826";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "New Mexico") {
        $UsStateName = "New Mexico";
        $Lat =  "34.307144";
        $Long = "-106.018066";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "New York") {
        $UsStateName = "New York";
        $Lat = "43";
        $Long = "-75";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "North Carolina") {
        $UsStateName = "North Carolina";
        $Lat = "35.782169";
        $Long = "-80.793457";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "North Dakota") {
        $UsStateName = "North Dakota";
        $Lat = "47.650589";
        $Long = "-100.437012";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Ohio") {
        $UsStateName = "Ohio";
        $Lat =  "40.367474";
        $Long = "-82.996216";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Oklahoma") {
        $UsStateName = "Oklahoma";
        $Lat = "36.084621";
        $Long = "-96.921387";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Oregon") {
        $UsStateName = "Oregon";
        $Lat = "44";
        $Long = "-120.5";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Pennsylvania") {
        $UsStateName = "Pennsylvania";
        $Lat = "41.203323";
        $Long = "-77.194527";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Rhode Island") {
        $UsStateName = "Rhode Island";
        $Lat =  "41.5";
        $Long = "-100";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "South Carolina") {
        $UsStateName = "South Carolina";
        $Lat = "33.836082";
        $Long = "-81.163727";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "South Dakota") {
        $UsStateName = "South Dakota";
        $Lat = "44.5";
        $Long = "-100";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Tennessee") {
        $UsStateName = "Tennessee";
        $Lat = "35.860119";
        $Long = "-86.660156";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Texas") {
        $UsStateName = "Texas";
        $Lat =  "31";
        $Long = "-100";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Utah") {
        $UsStateName = "Utah";
        $Lat = "39.41922";
        $Long = "-111.950684";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Vermont") {
        $UsStateName = "Vermont";
        $Lat = "44";
        $Long = "-72.699997";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Virginia") {
        $UsStateName = "Virginia";
        $Lat = "37.926868";
        $Long = "-78.024902";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Washington") {
        $UsStateName = "Washington";
        $Lat = "47.751076";
        $Long = "-120.740135";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "West Virginia") {
        $UsStateName = "West Virginia";
        $Lat = "39";
        $Long = "-80.5";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else if ($State["USAState"] == "Wisconsin") {
        $UsStateName = "Wisconsin";
        $Lat = "44.5";
        $Long = "-89.5";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else  if ($State["USAState"] == "Wyoming") {
        $UsStateName = "Wyoming";
        $Lat = "43.07597";
        $Long =  "-107.290283";

        $sql = "INSERT INTO `CovidUSReport`(`USState`, `Lat`, `Long`, `Value`) 
        VALUES ('$UsStateName',$Lat,$Long ,$toalCases)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        //echo($State["USAState"]." NOT FOUND");
    }
}

$UpdateDate = date("m/d/Y - h:i");

$sql = "INSERT INTO `ReportUpdate`(`UpdatedDate`) 
        VALUES ('$UpdateDate')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

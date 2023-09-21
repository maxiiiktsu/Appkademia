<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>







</body>

</html>


<?php
//echo "Ahoj " . $_GET['name'];
date_default_timezone_set('Europe/Bratislava');
$cas = date("Y-m-d H:i:s");
//echo "<style> font family = 'Comic Sans'</style> Ahoj";
//echo "<br>";
//$h = date("H");
$h = 7;

function Arrival($h)
{
    $meskanie = false;

    if ($h >= 8) {
        $meskanie = true;
    }
}

if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    //echo '<font color = "Green"> zadaj meno';
    die();
}







$names = array();

function customPrintR($names, $name)
{





    if (file_exists("studenti.json")) {
        $names = json_decode(file_get_contents("studenti.json"), true);
    };

    if (isset($names[$name])) {
        $names[] = 1;
    }

    $names[] = $name . "<br>";

    file_put_contents("studenti.json", json_encode($names, JSON_PRETTY_PRINT));


    ob_start();
    print_r($names);
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}
$result = customPrintR($names, $name);












function ArrivalLog()
{

    $arrival = array();
    $time = date("H:i:s");

    if (file_exists("prichody.json")) {
        $arrival = json_decode(file_get_contents("prichody.json"), true);
    };

    if (isset($arrival[$time])) {
        $arrival[] = 1;
    }



    if (date("H") >= 8) {

        $times = $time . " - meskanie<br>";
    } else {
        $times = $time . "<br>";
    }
    $arrival[] = $times;


    file_put_contents("prichody.json", json_encode($arrival, JSON_PRETTY_PRINT));


    ob_start();
    print_r($arrival);
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}

$resultnum = ArrivalLog();




//$encoded_names = array();
//$encoded_names = json_encode($names, JSON_PRETTY_PRINT);



function GetLog()
{
    $log = file_get_contents("log.txt");
    echo nl2br("$log\n");
}

/*
$NameObject = new NameLogger;
$TimeObject = new TimeLogger;

$NameObject->NameLog($name);
$TimeObject->ArrivalLog();
*/
//NameLog($name, $names);
// customPrintR($names, $name);
// ArrivalLog();
?>
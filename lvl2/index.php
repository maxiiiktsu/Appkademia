<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="$_POST">

        <button>zapisat</button>
        <input type="text" name="name">
    </form>
</body>

</html>


<?php
echo "Ahoj <br>";
date_default_timezone_set('Europe/Bratislava');
echo date("Y-m-d H:i");
$cas = date("Y-m-d H:i");
//$h = date("H");
$h = 7;

function Arrival($h)
{
    $meskanie = FALSE;

    if ($h >= 8) {
        $meskanie = TRUE;
    }
}

$name = $_GET["name"];


class NameLogger
{


    public static function NameLog($name)
    {
        $names = array();



        if (file_exists("studenti.json")) {
            $names = json_decode(file_get_contents("studenti.json"), true);
        };

        if (isset($names[$name])) {
            $names[]++;
        } else {
            $names[] = 1;
        }

        $names[] = $name;

        file_put_contents("studenti.json", json_encode($names, JSON_PRETTY_PRINT));
        echo "<pre>";
        print_r($names);
        echo "</pre>";
    }
}


class TimeLogger
{


    public function ArrivalLog()
    {

        $arrival = array();
        $time = date("H:i:s");

        if (file_exists("prichody.json")) {
            $arrival = json_decode(file_get_contents("prichody.json"), true);
        };

        if (isset($arrival[$time])) {
            $arrival[]++;
        } else {
            $arrival[] = 1;
        }



        if (date("H") >= 8) {

            $times = strval($time) . " - meskanie";
        } else {
            $times = strval($time);
        }
        $arrival[] = $times;


        file_put_contents("prichody.json", json_encode($arrival, JSON_PRETTY_PRINT));

        echo "<pre>";
        print_r($arrival);
        echo "</pre>";
    }
}



//$encoded_names = array();
//$encoded_names = json_encode($names, JSON_PRETTY_PRINT);



function GetLog()
{
    $log = file_get_contents("log.txt");
    echo nl2br("$log\n");
}


$NameObject = new NameLogger;
$TimeObject = new TimeLogger;

$NameObject->NameLog($name);
$TimeObject->ArrivalLog();


//GetLog();
//NameLog($name);
//ArrivalLog();

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post"> <button>Submit</button></form>
</body>

</html>


<?php
echo "Ahoj <br>";
date_default_timezone_set('Europe/Bratislava');
echo date("Y-m-d H:i");
$cas = date("Y-m-d H:i");
$h = date("H");



function Arrival($h,)
{
    $meskanie = FALSE;

    if ($h >= 8) {
        $meskanie = TRUE;
    }
}



function WriteLog($cas, $h,)
{
    if ($h >= 20 && $h <= 24) {
        die("nepodarilo sa zapisat");
    }

    if ($meskanie = TRUE) {
        file_put_contents("log.txt", "$cas" . " meskanie\n", FILE_APPEND);
    } else {

        file_put_contents("log.txt", "$cas\n", FILE_APPEND);
    }
}



function GetLog()
{
    $log = file_get_contents("log.txt");
    echo nl2br("$log\n");
}
WriteLog($cas, $h);
GetLog();

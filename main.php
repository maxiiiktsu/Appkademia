<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="main.php" method="post"> <button>Submit</button></form>
</body>

</html>


<?php
echo "Ahoj <br>";
date_default_timezone_set('Europe/Bratislava');
echo date("Y-m-d H:i");
$cas = date("Y-m-d H:i");
$h = date("H");
if ($h >= 20) {
    die("nepodarilo sa zapisat");
}
file_put_contents("log.txt", "$cas", FILE_APPEND);
if ($h >= 8) {
    file_put_contents("log.txt", " meskanie\n", FILE_APPEND);
};
if ($h >= 20) {
    die("nepodarilo sa zapisat");
}


$log;
function GetLog()
{
    $log = file_get_contents("log.txt");
    echo nl2br("$log\n");
}
GetLog();

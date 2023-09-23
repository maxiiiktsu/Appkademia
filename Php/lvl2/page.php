<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIt</title>
    <link rel="stylesheet" href="style.css">

</head>

<body style="background-color: aliceblue; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
">

    <div class="inpt">
        <div style="display: flex;flex-direction: column; align-items: center; justify-content:center">
            <p class="cas"><?php
                            date_default_timezone_set('Europe/Bratislava');
                            echo "Momentalne je " . date("H:i:s");  ?>
            </p>

            <form style="margin-top: 50px;" action="page.php" method="get">

                <div style="display: flex;flex-direction:row">
                    <input class="nameput" type="text" name="name" placeholder="Meno patri sem">
                    <button class="butput"></button>
                </div>
            </form>
        </div>
    </div>

    <?php include("index.php");
    ?>

    <div class="datas">
        <div class="datab">
            <p>
                <?php

                echo $result;

                ?>
            </p>

        </div>

        <div class="datac">

            <p>
                <?php

                echo $resultnum;

                ?>
            </p>

        </div>

    </div>

</body>

</html>
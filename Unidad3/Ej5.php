<?php

$url = "Ej5.php?valor=estoy&act=recorriendo&un=array";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ej 5</title>
        <style>
            body{
                background-color: lightgrey;
            }
            table{
                background-color: white;
                margin-left: 40%;
                border: 1px solid black;
            }
            th{
                background-color: blue;
                color: white;
            }
            td{
                background-color: white;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Tabla</th>
                <th>Valor</th>
            </tr>
            <?php foreach($_GET as $key => $value){ ?>
                <tr>
                    <td>
                        <?= $key ?>
                    </td>
                    <td>
                        <?= $value ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
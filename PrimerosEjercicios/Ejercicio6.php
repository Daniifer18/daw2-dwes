<?php $n1 = 23; $n2 = 5; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 6</title>
        <style>
            h3{
                text-align: center;
            }
            p{
                font-size:16px;
                font-family: italic;
            }
        </style>
    </head>
    <body>
        <h1>Operaciones</h1>
        <?php 
            echo  "<p>-Suma: ". $n1 + $n2 ."</p>"
        ?>
        <?php 
            echo  "<p>-Resta: ". $n1 - $n2 ."</p>"
        ?>
        <?php 
            echo  "<p>-Multiplicación: ". $n1 * $n2 ."</p>"
        ?>
        <?php 
            echo  "<p>-División: ". $n1 / $n2 ."</p>"
        ?>
    </body>
</html>
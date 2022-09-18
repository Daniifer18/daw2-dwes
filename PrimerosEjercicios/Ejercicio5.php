<?php $nombre = " Alberto "; $pi = 3.14; $r = 5*5; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5</title>
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
        <h1>Área de un circulo</h1>
        <?php 
            echo "<h3>Bienvenid@ a la página " . $nombre . "</h3>"
        ?>
        <?php 
            echo  "<p>El área del círculo es de: ". $pi*$r ."m2</p>"
        ?>
    </body>
</html>
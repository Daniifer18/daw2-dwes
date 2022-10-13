<?php
/*
Crea una página web que genere 3 números aleatorios "mt_rand()", con sentencias condicionales los asigna 
a tres variables: mayor, mediano y pequeño. Después los mostrará en h1, h2 y h3 respectivamente.
*/

$var = [];

for ($i=0; $i < 3; $i++) { 
    $var[$i] = mt_rand(1,100);
}

sort($var);

function ordenar($var){
    if(($var[0] > $var[1]) && ($var[1] > $var[2]) && ($var[0] > $var[2])){
        return "<h1>".$var[0]."</h1><h2>".$var[1]."</h2><h3>".$var[2]."</h3>";
    }elseif(($var[2] > $var[1]) && ($var[1] > $var[0]) && ($var[2] > $var[0])){
        return "<h1>".$var[2]."</h1><h2>".$var[1]."</h2><h3>".$var[0]."</h3>";
    }elseif(($var[1] > $var[0]) && ($var[0] > $var[2]) && ($var[1] > $var[2])){
        return "<h1>".$var[1]."</h1><h2>".$var[0]."</h2><h3>".$var[2]."</h3>";
    }elseif(($var[2] > $var[0]) && ($var[0] > $var[1]) && ($var[2] > $var[1])){
       return "<h1>".$var[2]."</h1><h2>".$var[0]."</h2><h3>".$var[1]."</h3>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ej 1</title>
    </head>
    <body>
        <p>
            Numeros ordenados
        </p>
        <h1>
            <?= $var[2] ?>
        </h1>
        <h2>
            <?= $var[1] ?>
        </h2>
        <h3>
            <?= $var[0] ?>
        </h3>
    </body>
</html>
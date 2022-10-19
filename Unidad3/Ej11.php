<?php

$arrViejo = [3, "hOlA", 'hola', 4, 5, 8, "PEPE"];

$arrNuevo = [3, "hOlA", 'hola', 4, 5, 8, "PEPE"];


function modificarArr($arrNuevo){
    $cont = 2;

    foreach ($arrNuevo as &$valor) {
        if (is_int($valor)) {
            $valor = pow($valor, $cont);
            $cont++;
        } elseif (is_float($valor)) {
            $valor *= -1;
        } elseif (is_string($valor)) {
            for ($i=0; $i < strlen($valor); $i++) { 
                if ($valor[$i] == strtoupper($valor[$i])) {
                    $valor .= strtolower($valor[$i]);
                }
                else {
                    $valor .= strtoupper($valor[$i]);
                }
            }
        }
    }
}


function verArr($a){
    foreach($a as $v){
        echo $v."<br>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 11</title>
    <style>
        body{
            background-color: lightgray;
        }
        p{
            text-align: center;
            color:red;
        }
        span{
            color: blue;
        }
    </style>
</head>
<body>
    <?php 
        modificarArr($arrNuevo);
        echo "<h3>Array viejo</h3>";
        verArr($arrViejo);
        echo "<br>";
        echo "<h3>Array nuevo</h3>";
        verArr($arrNuevo);
    ?>
</body>
</html>
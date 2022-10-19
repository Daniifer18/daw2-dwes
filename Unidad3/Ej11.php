<?php

$arr = [3, "hOlA", 'hola', -4.9, 5, 8.7, "PEPE"];


function modificarArr(&$arr){
    $cont = 2;

    foreach ($arr as &$valor) {
        if (is_int($valor)) {
            $valor = pow($valor, $cont);
            $cont++;
        } elseif (is_float($valor)) {
            $valor *= -1;
        } elseif (is_string($valor)) {
            $valor = strtolower($valor) ^ strtoupper($valor) ^ $valor;
        }
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
    </style>
</head>
<body>
    <?php 
        echo "<h3>Array viejo</h3>";
        print_r($arr);
        modificarArr($arr);
        echo "<br>";
        echo "<h3>Array nuevo</h3>";
        print_r($arr);
    ?>
</body>
</html>
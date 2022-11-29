<?php

const N = 6;
const M = 6;



function iniciarSopaLetras($tablero,int $n,int $m){
    
    $tablero;
    
    for ($i = 0; $i < $m; $i++) { 
        for ($j = 0; $j < $n; $j++) { 
            $tablero[$i][$j] = chr(rand(ord("a"), ord("z")));
        }
    }
    return $tablero;
}


function pintarTablero($tablero){
    echo "<table>";
    foreach ($tablero as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


/*
function darVuelta(string $palabra){
    $nuevaPalabra = "";
    for ($i = 0; $i  < strlen($palabra); $i++) { 
        $nuevaPalabra .= $palabra[strlen($palabra)-1-$i];
    }
    
    return $nuevaPalabra;
}
*/



function colocarPalabraHorizontal($tablero, $palabra){

    $caracteresPalabra = strlen($palabra);

    $longitudX = count($tablero) - $caracteresPalabra;
    $longitudY = count($tablero[0]);

    $ejeX = random_int(0,$longitudX);
    $ejeY = random_int(0,$longitudY-1);

    for ($i = 0; $i < $caracteresPalabra; $i++) {
        $tablero[$ejeY][$ejeX + $i] = substr($palabra,$i,1);
    }

}

function colocarPalabraVertical($tablero, $palabra){

    $caracteresPalabra = strlen($palabra);

    $longitudX = count($tablero) - $caracteresPalabra;
    $longitudY = count($tablero[0]);

    $ejeX = random_int(0,$longitudX);
    $ejeY = random_int(0,$longitudY-1);

    for ($i = 0; $i < $caracteresPalabra; $i++) {
        $tablero[$ejeX][$ejeY + $i] = substr($palabra,$i,1);

    }
}

function horizontalAlReves(&$tablero, $palabra) {

    $caracteresPalabra = strlen($palabra);

    $longitudX = count($tablero) - $caracteresPalabra;
    $longitudY = count($tablero[0]);

    $ejeX = random_int(0,$longitudX);
    $ejeY = random_int(0,$longitudY-1);

    for ($i = 0; $i < $caracteresPalabra; $i++) {
        $tablero[$ejeY][$ejeX + $i] = substr($palabra,$caracteresPalabra - $i - 1,1);
    }

}

function verticalAlReves(&$tablero, $palabra) {

    $caracteresPalabra = strlen($palabra);

    $longitudX = count($tablero) - $caracteresPalabra;
    $longitudY = count($tablero[0]);

    $ejeX = random_int(0,$longitudX);
    $ejeY = random_int(0,$longitudY-1);

    for ($i = 0; $i < $caracteresPalabra; $i++) {
        $tablero[$ejeX + $i][$ejeY] = substr($palabra,$caracteresPalabra - $i - 1,1);
    }

}

function colocaPalabra(&$tablero,$palabra) {

    $aleatorio = random_int(0,3);
    switch ($aleatorio) {
        case 0:
            colocarPalabraHorizontal($tablero,$palabra);
        break;
        case 1:
            colocarPalabraVertical($tablero,$palabra);
        break;
        case 2:
            horizontalAlReves($tablero,$palabra);
        break;
        case 3:
            verticalAlReves($tablero,$palabra);
        break;
        default:
        break;
    }
}


$sopa = [];

$sopa = iniciarSopaLetras($sopa,N,M);

colocaPalabra($sopa,"jose");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopa de letras</title>
    <style>
        body{
            background-color: lightblue;
        }
        table{
            width: 30%;
            background-color: white;
            text-align: center;
            margin: auto;
        }
        table,td,tr{
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?= pintarTablero($sopa) ?>
</body>
</html>
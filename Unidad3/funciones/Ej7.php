<?php

$arr = ["*","HOLA","ESTO","ES","PHP"];

function concatenar($arr){
    $cadena = "";
    for ($i=1; $i < count($arr); $i++) { 
        if($i == count($arr)-1){
            $cadena .= $arr[$i]; 
        }else{
            $cadena .= $arr[$i].$arr[0]; 
        }
    }
    return $cadena;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=
        , initial-scale=1.0">
        <title>Ej 7</title>
    </head>
    <body>
        <h3>
            <?= concatenar($arr) ?>
        </h3>
    </body>
</html>
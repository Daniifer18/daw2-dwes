<?php

session_start();

const MAX = 10;
const MIN = 0;

$numAle = isset($_SESSION["numAle"]) ? $_SESSION["numAle"] : random_int(MIN, MAX);
$intentos = isset($_SESSION["intentos"]) ? $_SESSION["intentos"] : 4;
$intentos--;

$_SESSION["intentos"] = $intentos;
$_SESSION["numAle"] = $numAle;

$numeroAle = $_SESSION["numAle"];
$numIntento = $_POST["num"];

if ($intentos == 0) {

    session_destroy();
}

if($_POST["Enviar"]){
    $valor = $_POST["num"];
}
function numIntentos($num,$numAle){
   
    if($num > $numAle){
        return "<h2>El numero oculto es menor</h2>";
    }else if($num < $numAle){
        return "<h2>El numero oculto es mayor</h2>";
    }else{
        return "<h2>Correcto</h2>";
    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
    <style>
        h2,h1,form{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num" value="<?= $valor ?>" placeholder="Introduzca un numero">
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?= numIntentos($numIntento,$numeroAle);?>
    <h1>Numero de intentos: <?=$intentos?></h1>
</body>
</html>
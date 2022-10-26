<?php
$cosas = [
    3,
    "frutas"  => ["a" => "naranja", "b" => [1, 2], "c" => "manzana"],
    "números" => [1, 2, 3, 4, 5, 6],
    "hoyos"   => ["primero", 5 => "segundo", "tercero"],
    "asd"
];

function imprimeTabulado($cosas,$tab =""){
    foreach($cosas as $v){
        if (gettype($v) == "array") {
            echo $tab."array<br>";
            imprimeTabulado($v, $tab . "____");
        }
        else {
            echo $tab.$v."<br>";
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
    <title>Ejercicio 14</title>
</head>
<body>
    <h3>
        Array con tabulaciones 
    </h3>
    <?php 
        imprimeTabulado($cosas);
    ?>
</body>
</html>
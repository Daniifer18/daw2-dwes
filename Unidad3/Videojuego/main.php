<?php

spl_autoload_register(function ($class) {
    $classPath = "./";
    //echo "Autoload llamado";
    // en nuestros proyectos
    // ../src/
    // o la ruta a la raíz del proyecto
    require("$classPath${class}.php");
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUego</title>
    <style>
        body{
            background-color: lightblue;
        }
        h1,h3{
            text-align: center;
        }
        p{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Comienza el juego</h1>
    <?php
        echo "<hr>";
        echo "<h3>Humano</h3>";
        $finn = new Humano();
        $finn->setX(mt_rand(0,255));
        $finn->setY(mt_rand(0,255));
        $finn->setZ(mt_rand(0,255));
        $finn->atacar();
        $finn->defender();

        echo "<hr>";
        echo "<h3>Mago Oscuro</h3>";
        $negrito = new MagoOscuro();
        $negrito->setX(mt_rand(0,255));
        $negrito->setY(mt_rand(0,255));
        $negrito->setZ(mt_rand(0,255));
        $negrito->atacar();
        $negrito->defender();

        echo "<hr>";
        echo "<h3>Mago Blanco</h3>";
        $blanquito = new MagoBlanco();
        $blanquito->setX(mt_rand(0,255));
        $blanquito->setY(mt_rand(0,255));
        $blanquito->setZ(mt_rand(0,255));
        $blanquito->atacar();
        $blanquito->defender();

        echo "<hr>";
        echo "<h3>Edificio</h3>";
        $torreDragon = new Edificio();
        $torreDragon->setAltura(459);
        $torreDragon->setX(mt_rand(0,255));
        $torreDragon->setY(mt_rand(0,255));
        $torreDragon->setZ(mt_rand(0,255));
        $torreDragon->setDescripcion("<p>Este es un edificio enigmático de la ciudad de los dragones</p>");
        echo "<p>El edificio está en (".$torreDragon->getX().",".$torreDragon->getY().",".$torreDragon->getZ()."),<br> y mide:".$torreDragon->getAltura()."m y la descripcion del edificio es:".$torreDragon->getDescripcion()."</p>";

        echo "<hr>";
        echo "<h3>Objeto</h3>";
        $huevoDragon = new Objetos();
        $huevoDragon->setX(mt_rand(0,255));
        $huevoDragon->setY(mt_rand(0,255));
        $huevoDragon->setZ(mt_rand(0,255));
        $huevoDragon->setDescripcion("<p>Este item tiene el huevo de un poderoso dragón</p>");
        $huevoDragon->setPeso(5.3);
        echo "<p>El item está en (".$huevoDragon->getX().",".$huevoDragon->getY().",".$huevoDragon->getZ().")<br> pesa:".$huevoDragon->getPeso()."kg y la descripcion del item es:".$huevoDragon->getDescripcion()."</p>";
    ?>
</body>
</html>
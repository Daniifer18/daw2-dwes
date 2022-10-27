<?php

require('PlataformaPago.php');
require('BancoMalvado.php');
require('BitCoinConan.php');
require('BancoMaloMalisimo.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bancos PHP</title>
    <style>
        body{
            background-color: lightblue;
        }
        p{
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        $bancoCabron = new BancoMalvado();
        $bancoCabron->estableceConexion();
        $bancoCabron->compruebaSeguridad();
        $bancoCabron->pagar("Josele",234);
        echo "<hr>";
        $bancoCabron2 = new BitCoinConan();
        $bancoCabron2->estableceConexion();
        $bancoCabron2->compruebaSeguridad();
        $bancoCabron2->pagar("Antoñitor",122);
        echo "<hr>";
        $bancoCabron3 = new BancoMaloMalisimo();
        $bancoCabron3->estableceConexion();
        $bancoCabron3->compruebaSeguridad();
        $bancoCabron3->pagar("Arturp",333);
        echo "<hr>";
    ?>
</body>
</html>
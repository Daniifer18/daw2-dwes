<?php
    require('CuentaBancaria.php');

    $persona1 = new CuentaBancaria("Milloneti",1000000);
    $persona2 = new CuentaBancaria("Agapito",30345);
    $persona3 = new CuentaBancaria("Pobretón",-10000);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas Bancarias</title>
    <style>
        body{
            background-color: lightgray;
        }
        h3{
            text-align: center;
        }
        div,p{
            margin: 20px 5px 5px 350px;
            width: 40%;
            border: 1px solid black;
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h3>Información de las cuentas antes del desastre</h3>
    <?php
        $persona1->mostrar();
        $persona2->mostrar();
        $persona3->mostrar();

        for($i = 0;$i < 100;$i++){
            $persona1->retirar(1000);
        }

        $persona2->ingresar(1200);

        echo "<p>El saldo de Milloneti es ".$persona1->getSaldo()."<br>";
        echo "<p>El saldo de Agapito es ".$persona2->getSaldo()."<br>";
        echo "<p>El saldo de Pobretón es ".$persona3->getSaldo()."<br>";
        
        $persona3->unirCon($persona1);

        $persona2->transferirA($persona1,$persona2->getSaldo()/2);

        $persona1->mostrar();
        $persona2->mostrar();
        $persona3->mostrar();
    ?>
</body>
</html>
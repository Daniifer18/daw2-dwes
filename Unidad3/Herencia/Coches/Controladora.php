<?php 

require('Coche.php');
require('CocheRemolque.php');
require('CocheGrua.php');

$arr = [];

$coche1 = new Coche();
$coche1->setMatricula('1000');
$coche1->setMarca('BMV');
$coche1->setCarga(30);


$coche2 = new CocheRemolque();
$coche2->setMatricula('1001');
$coche2->setMarca('Renault');
$coche2->setCarga(20);
$coche2->setCapacidadRemolque(200);


$coche3 = new Coche();
$coche3->setMatricula('1002');
$coche3->setMarca('Porche');
$coche3->setCarga(40);

$coche4 = new CocheGrua();
$coche4->setMatricula('1003');
$coche4->setMarca('Renault');
$coche4->setCarga(20);
$coche4->cargar($coche3);

$coche5 = new CocheRemolque();
$coche2->setMatricula('1005');
$coche2->setMarca('Nissan');
$coche2->setCarga(22);
$coche2->setCapacidadRemolque(250);

$coche6 = new CocheGrua();
$coche4->setMatricula('1007');
$coche4->setMarca('Kia');
$coche4->setCarga(30);
$coche4->cargar($coche5);

$arr = [$coche1,$coche2,$coche4,$coche6];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
    <style>
        body{
            background-color: lightblue;
            font-family: 'Courier New', Courier, monospace;
        }
        h1{
            text-align: center;
        }
        div{
            margin: 10px 10px 10px 300px;
            border: 1px solid black;
            background-color: white;
            width: 50%;
        }
    </style>
</head>
<body>
    <h1>Los coches son:</h1>
    <?php array_walk($arr,function(Coche $a){
        
        echo "<div>".$a->__toString()."</div>";

    })  ?>

</body>
</html>
<?php

$n1;
$n2;

function sumaNumeros($n1,$n2){
    $suma = 0;
    for ($i=$n1+1; $i < $n2; $i++) { 
        $suma += $i;
    }
    return $suma;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ej 6</title>
    </head>
    <body>
        <?php for($i = 0;$i < 10;$i++) { ?>
            <h3>
                <?php 
                $n1 = mt_rand(1,20); $n2 = mt_rand(1,20);$vaux = 0;
                if($n1 > $n2){
                    $vaux = $n2;
                    $n2 = $n1;
                    $n1 = $vaux;
                    
                } 
                echo sumaNumeros($n1,$n2) ?>
            </h3>
        <?php } ?>
    </body>
</html>
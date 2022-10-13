<?php
$num = 10;

function esPrimo($num){
    $retorno = true;
    for ($i = 2; $i <= $num/2 && $retorno; $i++) {

        if (($num % $i) == 0) {

            $retorno = false;

        }
    }
return $retorno;
}

while($num != 17 && !esPrimo($num)){
    $num = mt_rand(1,100);
    echo "<span>".$num."</span><br>";
}

?>
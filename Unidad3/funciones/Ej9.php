<?php 

$v1 = "Hola";
$v2 = 3;

echo "El valor de la primera variable es: ".$v1."<br>El valor de la segunda variable es: ".$v2;

function intercambioValores(&$v1,&$v2){
    $vaux = $v2;
    $v2 = $v1;
    $v1 = $vaux;

    return "<br>El valor de la primera variable ahora es: ".$v1."<br>El valor de la segunda variable ahora es: ".$v2;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 9</title>
</head>
<body>
    <h1>
        <?= intercambioValores($v1,$v2) ?>
    </h1>
    <h3>
        <?= $v1." y ".$v2 ?>
    </h3>
</body>
</html>
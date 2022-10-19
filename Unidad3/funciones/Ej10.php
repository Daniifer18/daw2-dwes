<?php 

function aleatorio(int $valoeDefecto = 10, int $max= 10, int $min = 0): array {
    $arr = [];

    for ($i = 0; $i < $$valoeDefecto; $i++) { 
        $arr[$i] = mt_rand($min, $max);
    }

    return $arr;
}

$arr1 = aleatorio();
$arr2 = aleatorio(5);
$arr3 = aleatorio(5, 50);
$arr4 = aleatorio(5, 50, -50);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 10</title>
</head>
<body>
    <h3>
        Arrays con valores aleatorios
    </h3>
    <p>
        <?= print_r($arr1) ?>
    </p>
    <p>
        <?= print_r($arra2) ?>
    </p>
    <p>
        <?= print_r($arr3) ?>
    </p>
    <p>
        <?= print_r($arr4) ?>
    </p>
</body>
</html>
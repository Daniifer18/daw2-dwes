<?php

function tipoArr(...$parametros){
    $arrAsociativo = [];
    foreach($parametros as $key => $value) {
        $arrAsociativo[gettype($value)] += 1;
    }

    return $arrAsociativo;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 8</title>
    <style>
        body{
            background-color: lightgray;
        }
        p{
            text-align: center;
            color:red;
        }
        span{
            color: blue;
        }
    </style>
</head>
<body>
    <?php 
        $arr = tipoArr(3, "h", 'hola', [1,2,3], [1], "h");
        print_r($arr);
        foreach($arr as $key => $value){
            echo "<p>".$key." <span> => </span> ".$value."</p>";
        }
    ?>
</body>
</html>
<?php

function modificarArr($arr){
    $cont = 2;
    foreach($arr as &$value){
        if (gettype($value) == "integer") {
            $value = pow($value,$cont);
            $cont++;
        }else if (gettype($value) == "string"){
            for($i = 0;$i < strlen($value);$i++){
                if(!verLetra($value[$i])){
                    $value[$i] = strtoupper($value[$i]);
                }else{
                    $value[$i] = strtolower($value[$i]);
                }
            }
        }else if (gettype($value) == "float"){
            $value *= -1;
        }
    }
}

function tipoArr(...$parametros){
    $arr1 = [];
    $arr2 = [];
    $arrFinal = [];
    foreach($parametros as $key => $value) {
        $arr1 = gettype($value);
        $arr2 = $value;
    }

    for ($i=0; $i < count($parametros); $i++) { 
        $arr1[$i];
        $arr2[$i];
        if ($i == count($parametros)-1) {
            $arrFinal[$i] =[
                $arr1[$i] => $arr2[$i],
            ];
        }else{
            $arrFinal[$i] =[
                $arr1[$i] => $arr2[$i]
            ];
        }
    }

    return $arrFinal;
}
function verLetra($a){

    $si = false;

    if($a == strtoupper($a)){
        $si = true;
    }

    return $si;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 11</title>
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
        $arr = tipoArr(3, "hOlA", 'hola', 4, 5, [1], "PEPE");
        print_r($arr);

        echo "<br>";
        print_r($arr);

        foreach($arr as $key => &$value){
            echo "<br>".$key."=>".$value;
        }
    ?>
</body>
</html>
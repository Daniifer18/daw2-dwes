<?php
    $numAle = array();
    function rellenarArray($numAle){
        for($i = 0;$i < 20;$i++){
            $numAle[$i] = [rand($i = 1,$j = 100)];
        }
    }
    function verArray($numAle){
        for($j = 0;$j < count($numAle);$j++){
            echo $numAle[$j];
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            margin: 0 auto;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <p>
        <?php rellenarArray($numAle); echo verArray($numAle) ?>
    </p>
    <p>
        <?php sort($numAle); echo verArray($numAle) ?>
    </p>
    <p>
        <?php $arr = array_slice($numAle,4,9); echo $arr ?>
    </p>
    <p>
        <?php array_push($numAle,$arr); echo verArray($numAle) ?>
    </p>
</body>
</html>
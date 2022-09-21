<?php 
    $r = mt_rand(128,255); 
    $g = mt_rand(128,255);
    $b = mt_rand(128,255);
    $color = "rgb(".$r.",".$g.",".$b.")";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 8</title>
        <style>
            .fondo{
                background-color: <?php echo $color ?>;
                color: <?php echo $color ?>;
            }
        </style>
    </head>
    <body>
        <center>
                <h1>PIRÁMIDE DE COLORES</h1>
                    <?php $n = 8; 
                        for($i = 1; $i <= $n; $i++) {
                                for($b = 1; $b <= $n - $i; $b++){
                                    echo "<span> </span>";
                                }
                                for($j = 1;$j <= 2 * $i - 1;$j++){
                                    echo "<span class=fondo>+</span>";
                                }
                            echo "<br>";
                        }
                    ?>
            </center>
    </body>
</html>
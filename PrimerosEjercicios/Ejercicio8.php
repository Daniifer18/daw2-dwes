<?php 
    $r = mt_rand(128,255); 
    $g = mt_rand(128,255);
    $b = mt_rand(128,255);
    $a = '0.2';
    $color = 'rgba('.$r.','.$g.','.$b.','.$a.')';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 8</title>
        <style>
            table{
                border:none;
            }
            td{
                border:none;
            }
            .fondo{
                background-color: <?php echo $bgcolor ?>;
            }
        </style>
    </head>
    <body>
        <center>
                <h1>PIRÁMIDE DE COLORES</h1>
                <table>
                    <?php $n = 8; 
                        for($i = 1; $i <= $n; $i++) { 
                            echo "<tr>";
                                for($b = 1; $b <= $n - $i; $b++){
                                    echo "<td></td>";
                                }
                                for($j = 1;$j <= 2 * $i - 1;$j++){
                                    echo "<td class=fondo></td>";
                                }
                            echo "</tr>";
                        }
                    ?>
                </table>   
            </center>
    </body>
</html>
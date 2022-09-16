<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <center>
            <h1>PIRÁMIDE</h1>
            <?php $n = 8; 
                for($i = 1; $i <= $n; $i++) { 
                    for($b = 1; $b <= $n - $i; $b++){
                        echo " ";
                    }
                    for($j = 1;$j <= 2 * $i - 1;$j++){
                        echo "*";
                    }
                    echo "<br>";
                }
            ?>
        </center>
    </body>
</html>
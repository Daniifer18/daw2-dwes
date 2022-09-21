<?php 
    $nombre = " Alberto "; $pi = 3.14;; 
    if(isset($_GET["radio"]) && is_numeric($_GET["radio"])){
        $r= $_GET["radio"];
    }else{
        $r = 4;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5</title>
        <style>
            input{
                border-radius: 5px;
                background-color: ;
            }    
        </style>
    </head>
    <body>
        <form type="GET" action="Ejercicio5.php">
            Radio:<input type="number" name="radio" value="<?= $r ?>">
            <input type="submit" value="Calcular">
            <br>
            Area: <?php echo M_PI*pow($r,2) ?>
        </form>
    </body>
</html>
<?php 
    $nombre = " Alberto ";; 
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
            form,h1{
                text-align: center;    
            }
            .f{
                border: solid 2px;
                background-color: lightblue;
            }    
        </style>
    </head>
    <body>
        <h1>Hola <?= $nombre ?> esta es el area del circulo</h1>
        <form type="GET" action="Ejercicio5.php">
            Radio:<input type="number" name="radio" value="<?= $r ?>">
            <input type="submit" value="Calcular" class="f">
            <br><br><br>
            Area: <?php echo M_PI*pow($r,2) ?>
        </form>
    </body>
</html>
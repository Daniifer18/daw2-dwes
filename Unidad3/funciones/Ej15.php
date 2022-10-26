<?php 

function cadenaInvertida($cadena,$i = 0) {
    if (!empty($cadena[$i])) {
        cadenaInvertida($cadena,$i + 1);
        echo $cadena[$i];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h3>
        Cadena invertida
    </h3>
    <?php
        cadenaInvertida('Hola que tal');
    ?>
</body>
</html>
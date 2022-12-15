<?php

$claro = isset($_COOKIE["claro"]) ? $_COOKIE["claro"] : 0;
setcookie("galletas", "chipschahoy");
setcookie("claro", $claro + 1);

print_r($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ¿Que pasa?
</body>
</html>
<?php
include("menu.php");

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
    <style>
        nav{
            width: 100%;
            position: fixed;
            border: 1px solid black;
        }
        a{
            margin-left: 30px;
        }
        #usuarioo{
            text-decoration: none;
        }
        body,a{
            background-color: <?= $_SESSION["colorFondo"] ?>;
            color: <?= $_SESSION["colorTexto"] ?>;
        }
    </style>
</head>
<body>
    <?= pintarMenu($_SESSION["usuario"]); ?>
    <br><br>
    <p>
        La mayor exportación de Australia son los boomerangs. También son la mayor importación.
    </p>
</body>
</html>
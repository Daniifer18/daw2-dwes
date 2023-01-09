<?php

include("menu.php");
session_start();

if (isset($_POST["Enviar"])) {


    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["colorFondo"] = $_POST["fondo"];
    $_SESSION["colorTexto"] = $_POST["colorTexto"];

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body,
        a {
            background-color: <?=  $_SESSION["colorFondo"] ?>;
            color: <?=  $_SESSION["colorTexto"] ?>;
        }

        nav {
            width: 100%;
            position: fixed;
            border: 1px solid black;
        }

        a {
            margin-left: 30px;
        }

        #usuarioo {
            text-decoration: none;
        }

        form {
            width: 80%;
            margin: auto;
            border: 1px solid black;
        }

        #enviar {
            margin-left: 50%;
        }
    </style>
</head>

<body>
    <?= pintarMenu($_COOKIE["usuario"]); ?>
    <br><br>
    <form action="" method="post">
        <label for="fondo">Background</label>
        <input type="color" name="fondo" id="fondo" value="<?= $_SESSION["colorFondo"] ?>" required><br><br>
        <label for="colorTexto">Color texto</label>
        <input type="color" name="colorTexto" id="colorTexto" value="<?= $_SESSION["colorTexto"] ?>" required><br><br>
        <label for="usu">Nombre</label>
        <input type="text" name="usuario" id="usu" placeholder="Introduzca su nombre de usuario" value="<?= $_SESSION["usuario"] ?>" required><br><br>
        <input type="submit" name="Enviar" id="enviar" value="Enviar">
    </form>
</body>

</html>
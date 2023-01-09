<?php

include("menu.php");

if (isset($_POST["Enviar"])) {

    setcookie("usuario", $_POST["usuario"]);
    setcookie("colorFondo", $_POST["fondo"]);
    setcookie("colorTexto", $_POST["colorTexto"]);
}

if (isset($_COOKIE["usuario"]) && isset($_COOKIE["colorFondo"]) && isset($_COOKIE["colorTexto"])) {
    $bgcolor = $_COOKIE["colorTexto"];
    $backColor = $_COOKIE["colorFondo"];
}


if (isset($_POST["Enviar"])) {
    $name = $_POST["usuario"];
}

if (isset($_POST["Enviar"])) {
    $text = $_POST["colorTexto"];
}

if (isset($_POST["Enviar"])) {
    $back = $_POST["fondo"];
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
            background-color: <?= $backColor ?>;
            color: <?= $bgcolor ?>;
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
        <input type="color" name="fondo" id="fondo" value="<?= $back ?>" required><br><br>
        <label for="colorTexto">Color texto</label>
        <input type="color" name="colorTexto" id="colorTexto" value="<?= $text ?>" required><br><br>
        <label for="usu">Nombre</label>
        <input type="text" name="usuario" id="usu" placeholder="Introduzca su nombre de usuario" value="<?= $name ?>" required><br><br>
        <input type="submit" name="Enviar" id="enviar" value="Enviar">
    </form>
</body>

</html>
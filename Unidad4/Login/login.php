<?php

require('AccesoADatos.php');


if(!isset($_SESSION["user"])){

    session_start();

}

//$datos = AccesoADatos::getSingletone();

//$_SESSION["usuariosBBDD"] = $datos->findUsers();

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$login = "";
$pass = "";
$url = "";
$errorList = [];

if(isset($_GET["url"])){
    $url = $_GET["url"];
}else if(isset($_POST["url"])){
    $url = $_POST["url"];
}


if (isset($_POST["submit"])) {
    if (isset($_POST["login"])) {
        $login = clean_input($_POST["login"]);
        $_SESSION["user"] = $login;
    }

    if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
        $errorList[] = "Usuario inválido";
        //http://php.net/manual/es/filter.filters.php
    }


    if (isset($_POST["password"])) {
        $password = clean_input($_POST["password"]);
    }

    // $sql="SELECT * FROM usuarios WHERE user = ? AND password=?";
    // Consulta preparada!
    // Traed registro de usuario con ese email
    // Haced un hash de la contraseña
    // Comparad hash con hash
    // Pasar contraseña a md5 : $password = md5($_POST["password"]);
    // password_verify para ver si la contraseña coincide 


    $mP = AccesoADatos::getSingletone()->findUsersByEmail($login);


    if (!empty($mP) && password_verify($password, $mP["pass"])) {
        // Bonus: Semos pogramadores güenos. 
        // Haced un reenvío a la página privada que quería visitar.
        if($url != ""){
            header('Location:'. $_GET["url"]);
        }else{
            header('Location: premio.php');
        }
        exit;
    } else {
        $errorList[] = "Clave errónea";
    }
}


if (isset($_GET["error"])) {
    $errorList[] = $_GET["error"];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
    </head>
    <body>
        <form action="login.php" method="post" class="login">
            <p>
                <label for="login">Email:</label>
                <input type="text" name="login" id="login" value="<?= $login ?>">
                <input type="hidden" name="url" id="url" value="<?= $url ?>">
            </p>

            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="">
            </p>

            <?php if (count($errorList) > 0) { ?>
                <p>
                    <?php foreach ($errorList as $error) { ?>
                <div class="error"><?= $error ?></div>
            <?php } ?>
            </p>
        <?php } ?>

        <p class="login-submit">
            <label for="submit">&nbsp;</label>
            <button type="submit" name="submit" class="login-button">Login</button>
        </p>
        </form>
    </body>
</html>
<?php

$verificado = isset($_GET["Aceptar"]);
if($verificado){
    setcookie("verificado", "No entiendo nada");
}

function pintarForm(){
    return "
        <form action='' method='get'>
            <label>Politica de privacidad (Te voy a robar los datos)</label><br>
            <input type='submit' name='Aceptar' value='Aceptar'>
            <input type='submit' name='Rechazar' value='Rechazar'>
        </form>
    ";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        *{
            text-align: center;
        }
        body{
            background-color: #41f0e3;
            background-image: linear-gradient(270deg, #41f0e3 0%, #79eed0 100%);
        }
        form{
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 1px solid black;
        }
        input{
            border: solid 1px black;
            background-color: blue;
            color: white;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h1>BIENVENIDO</h1>
    <a href="configurado.php">Acceso</a>
    
    <?php
        if(isset($_GET["showerror"])){
            echo "<h3>Debes aceptar las cookies</h3>";
        }
    ?>
    <?php
        if(!$verificado){
            echo pintarForm();
        }
    ?>
</body>
</html>
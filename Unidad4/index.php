<?php

//rint_r($_SERVER);

$servidor = $_SERVER['HTTP_USER_AGENT'];
$tiposervidor = explode(" ",$servidor);
$idioma = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "<hr> ";
if(substr($idioma,0,2) == "es"){
    echo "<h3>Esta usando " . $tiposervidor[2]. "</h3>";
}else if(substr($idioma,0,2) == "en"){
    echo "<h3>You are using " . $tiposervidor[2]. "</h3>";
}else{
    echo "<h3>正在使用 " . $tiposervidor[2]. "</h3>";
}
echo "<hr> ";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de enSO</title>
    <style>
        body{
            background-color: lightgrey;
        }
        div{
            background-color: white;
            width: 40%;
            margin: auto;
        }
        h3{
            text-align: center;
        }
        form{
            margin: 20px 20px 20px 20px;
        }
    </style>
</head>
<body>
    <div>
        <form action="index.php" type="post">
            Nombre:<input type="text" name="nombre" placeholder="Introduzca su nombre"><br><br>
            Edad:<input type="number" name="edad" min="0" max="130"><br><br>
            <input type="submit" name="envar" value="Enviar">
        </form>
    </div>
</body>
</html>
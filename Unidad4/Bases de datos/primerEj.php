<!--PDO
=========================================
testConnectionPDO.php-->
<?php

try {

    $mbd = new PDO('mysql:host=localhost;dbname=eventos', "dani", "111aaa");

    // Utilizar la conexión aquí
    $resultado = $mbd->prepare('SELECT * FROM Ciclistas');

    $consulta = $resultado->execute();

    $consulta = $resultado->fetchAll(PDO::FETCH_ASSOC);


        foreach ($consulta as $clave => $valor){
            echo "<pre>". $clave . "</pre><pre>" . var_dump($valor) . "</pre>";
        }
    

    // Ya se ha terminado; se cierra
    $consulta = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclistas</title>
    <style>
        body{
            background-color: lightblue;
        }
    </style>
</head>
<body>

</body>
</html>
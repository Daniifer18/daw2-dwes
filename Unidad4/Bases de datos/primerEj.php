<!--PDO
=========================================
testConnectionPDO.php-->
<?php

try {

    

    $mbd = new PDO('mysql:host=localhost;dbname=eventos', "dani", "111aaa");

    // Utilizar la conexión aquí
    $resultado = $mbd->query('SELECT * FROM Ciclistas');


    echo "<h1>Tabla de ciclistas</h1>";
    echo "<table>";
        foreach ($resultado as $fila){
            echo "<tr>";
            foreach ($fila as $clave => $valor){
            echo "<td>".$clave . "</td><td>" . $valor . "</td>";
            }
            echo "</tr>";
        }
    echo "</table>";

    // Ya se ha terminado; se cierra
    $resultado = null;
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
        h1,table{
            text-align: center;
        }
        table{
            margin: auto;
        }
        table,td{
            background-color: white;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

</body>
</html>
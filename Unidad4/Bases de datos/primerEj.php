<!--PDO
=========================================
testConnectionPDO.php-->
<?php

try {

    $mbd = new PDO('mysql:host=localhost;dbname=eventos', "dani", "111aaa");

    // Utilizar la conexión aquí
    $stmt = $mbd->prepare('SELECT * FROM Ciclistas');

    $stmt->execute();

    $consulta = $stmt->fetchAll();

   
    
    /*
    $acu = "";

    foreach ($consulta as $fila) {
        foreach ($fila as $campo) {
            $acu .= $campo . " ";
        }
        $acu .= "<br>";
    }

    echo $acu;
    */
    // Ya se ha terminado; se cierra
    
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

function imprimirTabla(array $ciclistas){
    
    return "<table>
    <tr>" .
        array_reduce($ciclistas[0],function(string $acumulador,array $value,string $key): string {

            return  $acumulador . "<th>" . $key . "<th>" ;
        },"")
    ."</tr>".
        array_reduce($ciclistas,function(string $acumulador,array $ciclista): string {
            return $acumulador ."<tr>". 
                array_reduce($ciclista,function(string $acumulador,array $campo) : string{
                    return $acumulador . "<td> ". $campo ."<td>";
                },"")
            ."</tr>";
        },"")
    ."</table>";
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
        table{
            border-collapse: collapse;
        }
        table,tr,td{
            background-color: white;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?= imprimirTabla($consulta) ?>
</body>
</html>
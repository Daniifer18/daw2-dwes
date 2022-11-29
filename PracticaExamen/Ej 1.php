<?php

const ESPACIOS = "&nbsp";
const PINTAR_X = "X";
const PINTAR_Y = "Y";
const TAMAÑO_TAB = 3;

$peticion = $_POST;

var_dump($_POST);


$tablero = [];

for ($i = 0; $i < TAMAÑO_TAB; $i++) { 
   
    for ($j = 0; $j < TAMAÑO_TAB; $j++) { 
        $tablero[$i][$j] = ESPACIOS;
    }
    
}

if(isset($_POST["posx"]) && $_POST["posx"] < 3 && $_POST["posx"] >= 0 ){
    $posx = $_POST["posx"];
}

if(isset($_POST["posy"]) && $_POST["posy"] < 3 && $_POST["posy"] >= 0 ){
    $posy = $_POST["posy"];
}

if($_POST["turno"] == "X"){
    $tablero[$posx][$posy] = PINTAR_X;
}

if($_POST["turno"] == "O"){
    $tablero[$posx][$posy] = PINTAR_Y;
}


?>

<html>

<head>
    <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
    <title>3 en Raya</title>
    <style>
        body {
            text-align: center;
        }

        h1 {
            padding-top: 0.5em;
            font-size: 8em;
        }

        table {
            border-collapse: collapse;
        }

        table {
            margin: auto;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        td {
            min-width: 3em;
            min-height: 3em;
            text-align: center;
        }

        input {
            max-width: 3em;
        }

        .error {
            font-weight: bold;
            color: #D33;
        }

        .victoria {
            font-weight: bold;
            font-size: 2em;
            color: #808000;
        }
    </style>
</head>

<body>

    <h1>3 en raya</h1>
    <table>
        <?php for($i = 0;$i < TAMAÑO_TAB;$i++) { ?>
            <tr>
                <?php for($j = 0;$j < TAMAÑO_TAB;$j++) { ?>
                    <td>
                        <?= $tablero[$i][$j] ?>
                    </td>
                <?php } ?>    
            </tr>
        <?php } ?>    
    </table><br><br>
    <div class="error">
        Esto es un texto de error
    </div>
    <div class="error">
        Jugador AAA ha ganado
        <a href="Ej 1.php">Juego nuevo</a>
    </div><br><br>
    <form action="Ej 1.php" method="post">
        Turno:
        <select name="turno">
            <option value="X">X</option>
            <option value="O">O</option>
        </select>
        <br><br>
        x: <input type="text" name="posx" value=""><br><br>
        y: <input type="text" name="posy" value=""><br><br>
        <button type="submit" name="submit">Jugar</button>
    </form>

</body>

</html>
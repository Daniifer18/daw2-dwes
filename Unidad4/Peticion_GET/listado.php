<?php
    $data =file_get_contents("temas.csv");

    $data= explode("\n",$data);
    array_pop($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <style>
        body{
            background-image: linear-gradient( 135deg, #FCCF31 10%, #F55555 100%);
            background-attachment: fixed;
        }
        div{
            width: 80%;
            margin: auto;
            margin-top: 5%;
        }
        table{
            margin: auto;
            text-align: center;
        }
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            background-color: lightblue;
        }
        td{
            background-color: white;
        }
    </style>
</head>
<body>
   <div>
    <table>
            <thead>
                <tr>
                    <th>Temazo</th>
                    <th>Hora</th>
                    <th>Minuto</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($data as $key => $valor){
                    echo "<tr>";
                        $valor = explode(";",$valor);
                    echo "<td>" .$valor[0]. "</td>";
                    echo "<td>" .$valor[1]. "</td>";
                    echo "<td>" .$valor[2]. "</td>";
                    echo "</tr>";
                }
            ?>    
            </tbody>
        </table>
   </div>
</body>
</html>
<?php 

$opciones = [
    "Madrid" => 28,
    "Sevilla" => 17,
    "Cáceres" => 56,
];

function generaSelect(array $opciones, int $seleccionada = -1) { ?>
    <select>
        <?php foreach($opciones as $clave => $valor) { ?>
            <option value="<?= $clave ?>" <?php if($valor == $seleccionada) echo "selected"; ?>><?= $clave ?></option>
        <?php } ?>
    </select>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ej 13</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                background-color: lightgrey;
            }
            #centro{
                border-radius: 5px black;
                margin-top: 3%;
                font-weight: 600;
            }
            option{
                margin-left: 20%;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="centro">
                <div class="card">
                    <div class="card-body" id="sombra">
                    <?php
                        generaSelect($opciones, 56);
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </body>
</html>
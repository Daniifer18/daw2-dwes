<?php 
          
$yo = [
    "Nombre" => "Jorge Dueñas Lerín",
    "Dirección" => "Calle falsa número 1234",
    "Teléfono" => "91 123 45 67",
    "Población" => "Madrid",
    "Edad" => 23,
];

function generarFormulario($valor,$clave) { ?>
    <form method="post" action="Ej12.php">
        <?php if(is_string($valor)) { ?>
            <label for="<?= $clave ?>"><?= $clave ?></label><br>
            <input type="text" name="<?= $clave ?>" id="<?= $clave ?>" value="<?= $valor ?>"><br><br>
        <?php } else if(is_int($valor)) { ?>
            <label for="<?= $clave ?>"><?= $clave ?></label><br>
            <input type="number" name="<?= $clave ?>" id="<?= $clave ?>" value="<?= $valor ?>" min=0><br><br>
        <?php } ?>
    </form>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 12</title>
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
        #sombra{
            box-shadow: 10px 5px 5px grey;
        }
        input{
            box-shadow: 3px 2px 2px grey;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" id="centro">
            <div class="card">
               <div class="card-body" id="sombra">
                    <?php array_walk($yo, "generarFormulario"); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>
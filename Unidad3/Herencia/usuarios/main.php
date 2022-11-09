<?php 

require('Usuario.php');
require('Resultado.php');
require('UsuarioAdmin.php');
require('UsuarioPremium.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
        body{
            background-color: lightgray;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>
        Usuarios Deportivos
    </h1>
    <?php 

        $premium = new UsuarioPremium('Josele', 'Rubio', 'Futbol');

        $premium->introducirResultados(Resultado::VICTORIA);
        $premium->introducirResultados(Resultado::VICTORIA);
        $premium->introducirResultados(Resultado::VICTORIA);

        $premium->introducirResultados(Resultado::DERROTA);
        $premium->introducirResultados(Resultado::DERROTA);
        $premium->introducirResultados(Resultado::DERROTA);

        $premium->__toString();




        $pepe = new Usuario('Pepe', 'El Caliente', 'Fútbol');

        $pepe->introducirResultados(Resultado::EMPATE);

        $pepe->introducirResultados(Resultado::VICTORIA);
        $pepe->introducirResultados(Resultado::VICTORIA);
        $pepe->introducirResultados(Resultado::VICTORIA);
        $pepe->introducirResultados(Resultado::VICTORIA);
        $pepe->introducirResultados(Resultado::VICTORIA);
        $pepe->introducirResultados(Resultado::VICTORIA);

        $pepe->introducirResultados(Resultado::DERROTA);
        $pepe->introducirResultados(Resultado::DERROTA);
        $pepe->introducirResultados(Resultado::DERROTA);
        $pepe->introducirResultados(Resultado::DERROTA);
        $pepe->introducirResultados(Resultado::DERROTA);
        $pepe->introducirResultados(Resultado::DERROTA);

        $pepe->__toString();


        $admin = new UsuarioAdmin('Alberto', 'Contreras');

        $admin->introducirResultados(Resultado::VICTORIA);
        $admin->introducirResultados(Resultado::VICTORIA);
        $admin->introducirResultados(Resultado::VICTORIA);

        $admin->introducirResultados(Resultado::DERROTA);
        $admin->introducirResultados(Resultado::DERROTA);
        $admin->introducirResultados(Resultado::DERROTA);

        $admin->__toString();

    ?>
</body>
</html>
<?php

$usuario;
if(!isset($_COOKIE["usuario"])){
    $_COOKIE["usuario"] = "Anonimo";
}

function pintarMenu($usuario){
    return "<nav>
    <a href='pagina1.php'>Pagina 1</a>
    <a href='pagina2.php'>Pagina 2</a>
    <a href='config.php'>Config</a>
    <a href='' id='usuarioo'>". $usuario ."</a>
    </nav>
    ";
}

?>
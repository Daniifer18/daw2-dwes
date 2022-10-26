<?php

class UsuarioAdmin extends Usuario{

    public const CANTIDAD_VICTORIAS = 3;

    public function __construct($apellidos = "",$deporte = "") {
        parent::__construct("admin", $apellidos, $deporte);
    }

    public function setNombre($nombre){
        parent::setNombre($nombre."(Admin)");
    }


    public function crearPartido() {
        echo $this->nombre ." crea un partido";
    }

}


?>
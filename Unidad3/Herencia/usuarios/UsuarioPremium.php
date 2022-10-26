<?php 

class UsuarioPremium extends Usuario{

    public const Cantidad_Victorias = 3;

    public function __construct(string $nombre = "", string $apellidos = "", string $deporte = "") {
        parent::__construct($nombre, $apellidos, $deporte);
    }

    public function setNombre($nombre){
        parent::setNombre($nombre."(Premium)");
    }

    public function getNombre(){
        return $this->nombre;
    }

}


?>
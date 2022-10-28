<?php

trait Descripcion{
    private string $descripcion;

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
}

?>
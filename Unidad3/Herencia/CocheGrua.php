<?php 

class CocheGrua extends Coche{

    private ?Coche $cocheCargado;

    public function getCocheCargado(){
        return $this->cocheCargado;
    }

    public function setCocheCargado($cocheCargado){
        $this->cocheCargado = $cocheCargado;
    }

    public function cargar(Coche $coche){
        $this->cocheCargado = $coche;
    }

    public function descargar(){
        $this->cocheCargado = null;
    }

    public function __toString(){
        return parent::__toString().(($this->cocheCargado == null)?"No tiene carga":"<br>Lleva: ". $this->cocheCargado->__toString());
    }
} 

?>
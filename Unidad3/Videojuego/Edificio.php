<?php 

class Edificio{

    use Descripcion;
    use Coordenadas;

    private float $altura;

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }
}

?>
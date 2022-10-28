<?php 

class Objetos{

    use Descripcion;
    use Coordenadas;

    private float $peso;


    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }
}

?>
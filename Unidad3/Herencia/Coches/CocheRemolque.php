<?php 

class CocheRemolque extends Coche{

private float $capacidadRemolque;

public function getCapacidadRemolque(){
    return $this->capacidadRemolque;
}

public function setCapacidadRemolque($capacidadRemolque){
    $this->capacidadRemolque = $capacidadRemolque;
}

public function __toString(){
    return parent::__toString() ." y remolque de " . $this->capacidadRemolque. "<br>"; 
}

} 

?>
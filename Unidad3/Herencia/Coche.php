<?php 

class Coche{

private string $matricula;
private string $marca;
private float $carga;


public function setMatricula($matricula){
    $this->matricula = $matricula;
}

public function getMatricula(){
    return $this->matricula;
}

public function setMarca($marca){
    $this->marca = $marca;
}

public function getMarca(){
    return $this->marca;
}

public function setCarga($carga){
    $this->carga = $carga;
}

public function getCarga(){
    return $this->carga;
}

public function __toString(){
    return "Coche: ". $this->matricula . ", ". $this->marca ." con carga: " .$this->carga;
}

} 

?>
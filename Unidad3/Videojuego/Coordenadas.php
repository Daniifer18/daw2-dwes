<?php

trait Coordenadas{

    private int $x;
    private int $y;
    private int $z;

    public function getX(){
        return $this->x;
    }
    
    public function setX($x){
        $this->x = $x;
    }

    public function getY(){
        return $this->y;
    }

    public function setY($y){
        $this->y = $y;
    }

    public function getZ(){
        return $this->z;
    }

    public function setZ($z){
        $this->z = $z;
    }
}

?>
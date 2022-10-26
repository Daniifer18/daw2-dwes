<?php

use LDAP\Result;

class Usuario{

    public const NivelMinimo = 0;
    public const NivelMaximo = 6;
    public const Cantidad_Victorias = 6;

    private string $nombre;
    private string $apellido;
    private string $deporte;
    private int $nivel;
    private array $resultados;

    public function __construct($nombre = "",$apellido = "",$deporte = "") {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setDeporte($deporte);
        $this->nivel = 0;
        $this->resultados = [];
    }

    public function getResultados(){
        return $this->resultados;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function getDeporte(){
        return $this->deporte;
    }

    public function setDeporte($deporte){
        $this->deporte = $deporte;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;  
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }


    private function mostrarResultados() {
        return "<ul>".
            array_reduce($this->resultados, function($carry, Resultado $actual) {
                return $carry."<li>$actual->value</li>";
            }, "")
            ."</ul>";
    }

    public function __toString() : string {
        return "Nombre: " . $this->getNombre() . ", Apellidos: $this->apellidos, Deporte: $this->deporte, Nivel: $this->nivel".self::mostrarResultados();
    }


    public function introducirResultados(Resultado $resultado){
        
        $this->resultados[] = $resultado;




    }

    public function comprobarResultados(Resultado $r){

        if($r == Resultado::EMPATE){
            return 0;
        }else{
            return($r == Resultado::VICTORIA)? 1 : -1;
        }

    }


}

?>
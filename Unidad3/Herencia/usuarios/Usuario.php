<?php

use LDAP\Result;

class Usuario{

    public const NIVEL_MINIMO = 0;
    public const NIVEL_MAXIMO = 6;
    public const CANTIDAD_VICTORIAS = 6;
    public const CANTIDAD_DERROTAS = 6;

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
    
    public function /* Adding a result to the array of results and then checking if the user has won or
    lost the match. If the user has won the match, it will check if the user has won
    6 matches in a row. If so, it will increase the level of the user. If the user
    has lost the match, it will check if the user has lost 6 matches in a row. If
    so, it will decrease the level of the user. */
    introducirResultados(Resultado $resultado){
        
        $this->resultados[] = $resultado;
        
        $contV = 0;
        $contD = 0;
        $nivel = 0;
        
        foreach($this->resultados as $partido){
            if($this->comprobarResultados($partido) == 1){
                $contV++;
                $contD = 0;
                echo "<p>El usuario ".$this->nombre." gana el partido</p>";
                if($contV == static::CANTIDAD_VICTORIAS && $nivel <= static::NIVEL_MAXIMO){
                    $contV = 0;
                    $nivel++;
                    echo "<p>El usuario ".$this->nombre." ha subido de nivel</p>";
                }
            }else if($this->comprobarResultados($partido) == -1){
                $contV = 0;
                $contD++;
                echo "<p>El usuario ".$this->nombre." pierde el partido</p>";
                if($nivel >= static::NIVEL_MINIMO && $contD == static::CANTIDAD_DERROTAS){
                    $contD = 0;
                    $nivel--;
                    echo "<p>El usuario ".$this->nombre." ha bajado de nivel</p>";
                }
            }else{
                $contV = 0;
                $contD = 0;
            }
        }

        if($nivel >= static::NIVEL_MINIMO && $nivel <= static::NIVEL_MAXIMO){
            $this->nivel = $nivel;
        }
        
        
    }
    
    public function comprobarResultados(Resultado $r){

        if($r == Resultado::EMPATE){
            return 0;
        }else{
            return($r == Resultado::VICTORIA) ? 1 : -1;
        }

    }

    private function mostrarResultados() {
        return "<ul>".
            array_reduce($this->resultados, function($c, Resultado $r) {
                return $c."<li>$r->value</li>";
            }, "")
            ."</ul>";
    }

    public function __toString() : string {
        return "Nombre: " . $this->getNombre() . ", Apellidos: $this->apellido, Deporte: $this->deporte, Nivel: $this->nivel".self::mostrarResultados();
    }

}

?>
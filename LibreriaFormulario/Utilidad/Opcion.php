<?php

namespace LibreriaFormulario\Utilidad;

abstract class Opcion{

    private string $value;

    private string $label;

    private string $id;


    public function __construct(string $label = "", string $value = "",string $id = "") {
        $this->label = $label;
        $this->value = $value;
        $this->id = $id;
    }

    public function getValue(){
        return $this->value;
    }


    public function setValue($value){
        $this->value = $value;

        return $this;
    }

 
    public function getLabel(){
        return $this->label;
    }


    public function setLabel($label){
        $this->label = $label;

        return $this;
    }

    abstract function pintarOp() : string;


    public function getId(){
        return $this->id;
    }

 
    public function setId($id){
        $this->id = $id;

        return $this;
    }
}


?>
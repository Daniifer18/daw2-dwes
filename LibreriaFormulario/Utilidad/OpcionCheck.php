<?php

namespace LibreriaFormulario\Utilidad;

use LibreriaFormulario\Utilidad\Opcion;

class OpcionCheck extends Opcion{

    private string $name;


    public function __construct(string $label = "", string $value = "",string $id,string $name) {
        parent::__construct($label,$value,$id);
        $this->name = $name;

    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name = $name;
        
        return $this;
    }
    public function pintarOp(): string {

        return " <input type='".TiposInput::CHECKBOX->value."' id='".$this->getId()."' name='".$this->name."' value='".$this->getValue()."'>
        <label for='".$this->getId()."'>".$this->getLabel()."<br>";

    }
}


?>
<?php

namespace LibreriaFormulario\Campos;

use LibreriaFormulario\Campos\CampoMultiple;
use LibreriaFormulario\Utilidad\Opcion;
use LibreriaFormulario\Utilidad\TiposInput;

class CampoCheck extends CampoMultiple{
    

    public function __construct(string $label = "", string $name = "", string $error) {
        parent::__construct($label, $name, TiposInput::CHECKBOX, "", $error);
    }

	public function contenidoCampos(): string {

        
        $valorAnterior = (isset($this->getOpciones()[$this->getName()]) && gettype($this->getOpciones()[$this->getName()]) == "array")  ? $this->getOpciones()[$this->getName()] : [];
        $cadena = "<label class='form-label'>". $this->getLabel() ."</label>";
        
        for($i = 0; $i < count($this->getOpciones()); $i++) {
            $cadena .= "
            <div class='form-check'>
                
                <input class='form-check-input' type='" . TiposInput::CHECKBOX->value . "' name='" . $this->getName() . "[]' 
                id='" . $this->getOpciones()[$i]->getId() . "' value='" . $this->getOpciones()[$i]->getValue() . "' 
                " . (in_array($this->getOpciones()[$i]->getValue(), $valorAnterior) ? "checked" : "") . ">
                <label class='form-check-label' for='" . $this->getOpciones()[$i]->getId() . "'> " . $this->getOpciones()[$i]->getLabel() . " </label>
            " . (($i == count($this->getOpciones())-1)?"<div class='invalid-feedback'>" . $this->getError() . "</div>":"") . "
            </div>";
        } 
        
        return $cadena;
	}
	

    public function validarCampos(array $peticion): bool {
        $valido = false;

        
        if (isset($peticion[$this->getName()])){
            $values = array_map(function(Opcion $op) : string {
                return $op->getValue();
            }, $this->getOpciones());

            
            $pruebas = array_filter(array_values(array_unique($peticion[$this->getName()])), function (string $valor) use ($values) {
                return in_array($valor, $values);
            });
            
            $valido = count($pruebas) > 0;
        }
        
        return $valido;
	}


}


?>
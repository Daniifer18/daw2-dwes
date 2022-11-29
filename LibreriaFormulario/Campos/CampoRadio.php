<?php

namespace LibreriaFormulario\Campos;

use LibreriaFormulario\Utilidad\OpcionRadio;
use LibreriaFormulario\Utilidad\TiposInput;


class CampoRadio extends CampoMultiple{

    private string $value;

    public function __construct(string $label = "", string $name = "",TiposInput $type = TiposInput::RADIO_BUTTON, string $id = "",string $value = "",string $error = "") {
        parent::__construct($label, $name, $type, $id,$error);
        $this->opciones = [];   
        $this->value = $value;
    }


    public function contenidoCampos() : string {
        return "<div class='mb-3'>
            <label class='form-label'>". $this->getLabel() ."</label>"       
            . array_reduce($this->getOpciones(), function(string $acumulador, OpcionRadio $opcion) {
                return $acumulador.$opcion->pintarOp();
        }, "")."</div>";
    } 

    public function getValue(){
        return $this->value;
    }


    public function setValue($value){
        $this->value = $value;

        return $this;
    }


	public function validarCampos(array $peticion): bool {

        $valido = false;

        if (isset($peticion[$this->getName()])) {
            $valores = array_map(function (OpcionRadio $op) : string {
                return $op->getValue();
            }, $this->getOpciones());
            
            $valido = in_array($peticion[$this->getName()],$valores);
            
        }
        
        return $valido;
       
	}
}

?>
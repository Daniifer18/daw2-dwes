<?php

namespace LibreriaFormulario\Campos;

use LibreriaFormulario\Utilidad\ExpReg;
use LibreriaFormulario\Utilidad\TiposInput;
use LibreriaFormulario\Validaciones;


class CampoEmail extends CampoTexto{


    public function __construct(string $label = "", string $name = "",TiposInput $type = TiposInput::EMAIL ,string $id = "", string $placeholder = "",string $error = "") {
        parent::__construct($label, $name, $type, $id,$placeholder,$error);
        $this->placeholder = $placeholder;    
    }

    public function contenidoCampos() : string {
        return "
            <label class='form-label'>". $this->getLabel() ."</label>
            <input class='form-control' type='" . $this->getType()->value . "' id='" . $this->getid() . "' name='". $this->getName() ."' placeholder='". $this->getPlaceholder() ."' value='".$this->mantenerCampo($_POST)."' required >
            <div class='invalid-feedback'>
            ".$this->getError()."
        </div>
        ";
    }

	public function validarCampos(array $peticion): bool {

       
        return isset($peticion[$this->getName()]) && (preg_match(ExpReg::CORREO->value, $peticion[$this->getName()]));
    
	}

}


?>
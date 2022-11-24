<?php

namespace LibreriaFormulario\Campos;

use LibreriaFormulario\Campos\CampoMultiple;
use LibreriaFormulario\Utilidad\HttpMethod;
use LibreriaFormulario\Utilidad\OpcionSelect;
use LibreriaFormulario\Utilidad\Placeholder;
use LibreriaFormulario\Utilidad\TiposInput;

class CampoSelect extends CampoMultiple{

    use Placeholder;


    public function __construct(string $label = "", string $name = "",TiposInput $type = TiposInput::SELECT,string $id ="", string $error = "",string $placeholder = "", OpcionSelect...$opciones) {
        parent::__construct($label, $name,$type, $id, $error);
        $this->setOpciones(array_merge($this->getOpciones(),$opciones));
        $this->placeholder = $placeholder;  
    }



	public function contenidoCampos(): string {

        return "";
	}
	

	public function validarCampos(HttpMethod $method): bool {

        return true;
	}
}
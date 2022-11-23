<?php

namespace LibreriaFormulario\Campos;

use LibreriaFormulario\Utilidad\HttpMethod;
use LibreriaFormulario\Utilidad\Placeholder;
use LibreriaFormulario\Utilidad\TiposInput;
use LibreriaFormulario\Validaciones;


class CampoTexto extends Campo{

    use Placeholder;

    public function __construct(string $label = "", string $name = "", TiposInput $type = TiposInput::TEXT, string $id = "",string $placeholder = "",string $error = "") {
        parent::__construct($label, $name, $type, $id, $error);
        $this->placeholder = $placeholder;    
    }

    public function getPlaceholder() : string {
        return $this->placeholder;
    }

    public function setPlaceholder(string $placeholder) : Campo{
        $this->placeholder = $placeholder;
        return $this;
    }

    public function contenidoCampos() : string {
        return "
            <label class='form-label'>". $this->getLabel() ."</label>
            <input class='form-control' type='" . $this->getType()->value . "' id='" . $this->getid() . "' name='". $this->getName() ."' placeholder='". $this->getPlaceholder() ."' value='".$this->mantenerCampo($_POST)."' required>
            <div class='invalid-feedback'>
                ".$this->getError()."
            </div>
        ";
    }

	/**
	 * @param \LibreriaFormulario\Utilidad\HttpMethod $method
	 * @return bool
	 */
	public function validarCampos(HttpMethod $method): bool {

        return Validaciones::getSingletone($method)->validarNombre($this->getName());

	}

}

?>
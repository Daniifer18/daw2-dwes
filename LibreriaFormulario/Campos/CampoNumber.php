<?php


namespace LibreriaFormulario\Campos;

use LibreriaFormulario\Utilidad\HttpMethod;
use LibreriaFormulario\Utilidad\TiposInput;
use LibreriaFormulario\Validaciones;


class CampoNumber extends CampoTexto{
    private int $maximo;
    private int $minimo;

    public function __construct(string $label = "", string $name = "",TiposInput $type = TiposInput::NUMBER ,string $id = "",string $placeholder = "",mixed $minimo = "", mixed $maximo = "",string $error = "") {
        parent::__construct($label, $name, $type, $id, $placeholder,$error);
        $this->minimo = $minimo;
        $this->maximo = $maximo;
        $this->placeholder = $placeholder;
    }

    public function contenidoCampos() : string {
        return "
            <label class='form-label'>". $this->getLabel() ."</label>
            <input class='form-control' id='" . $this->getId() . "' type='" . $this->getType()->value . "' name='". $this->getName() ."' placeholder='". $this->getPlaceholder() ."' min='" . $this->minimo . "' max='" . $this->maximo . "' value='".$this->mantenerCampo($_POST)."'required >
            <div class='invalid-feedback'>
                ".$this->getError()." ". $this->minimo ." y ". $this->maximo ."
            </div>
        ";
    }

    public function validarCampos(HttpMethod $method): bool {

        return Validaciones::getSingletone($method)->validarNumero($this->getName());
     
    }


}

?>
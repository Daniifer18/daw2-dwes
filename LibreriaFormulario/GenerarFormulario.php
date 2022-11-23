<?php

namespace LibreriaFormulario;
use LibreriaFormulario\Campos\Campo;
use LibreriaFormulario\Utilidad\HttpMethod;

class GenerarFormulario{

    private HttpMethod $method;
    private string $action;

    private array $campos = [];

    public function addCampo(Campo $campo){
        
        $this->campos[] = $campo; 
    }

    public function validarForm(){

        $valido = true;

        for($i = 0;$i < count($this->campos) && $valido;$i++){
            
            if(!$this->campos[$i]->validarCampos(HttpMethod::POST)){
                $valido = false;
            }
        }

        return $valido;
    }
    
    
    public function __construct(string $action = "",HttpMethod $method = HttpMethod::GET){
        $this->action = $action;
        $this->method = $method;
    }
    
    
    public function getAction() : string{
        return $this->action;
    }

    public function setAction(string $action){
        $this->action = $action;
        
        return $this;
    }
    
    public function getMethod() : HttpMethod{
        return $this->method;
    }
    
    
    public function setMethod(HttpMethod $method){
        $this->method = $method;
        
        return $this;
    }

    /*
    public function prevenirXSSInjection(array $peticion){
        $cadena = "";
        foreach ($peticion as $pet) {
            $cadena .= "<p>" .trim(htmlspecialchars(htmlentities($pet))). "</p>";
        }
    }
    */
    
    public function pintarForm(bool $valido) : string {

        

        return "
        <div class='card'>
            <div class = 'card-header text-right'>
                <h1 class='cabecera-form'>Crear evento</h1>
            </div>
            <div class='card-body' id='formulario'>
                <form action='". $this->action ."' method='". $this->method->value."' id='form' class='needs-validation ". ((!$valido) ? "was-validated" : "") ."' novalidate>
                ".
                array_reduce($this->campos, function(string $acu,Campo $actual) : string {

                    return $acu.$actual->crearCampo();
                },"")."
                <div class='d-grid gap-2 col-6 mx-auto'>
                    <input type='submit' value='Generar PDF' class='btn btn-primary' name='Enviar'>
                </div>
                </form>
            </div>
        </div>
        ";
       
    }
    
    public function crearPagina(bool $valido) : string {
        return "<div class='container'>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-6' id='centro'>
                    ". $this->pintarForm($valido) ."
                </div>
                <div class='col-md-3'></div>
            </div>
        </div>";
    }


    public function getCampos(){
        
        return $this->campos;
 
    }
}


?>

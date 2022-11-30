<?php


use LibreriaFormulario\Campos\CampoEmail;
use LibreriaFormulario\Campos\CampoTexto;
use LibreriaFormulario\Formulario;
use LibreriaFormulario\Utilidad\Evento;
use LibreriaFormulario\Utilidad\HttpMethod;
use LibreriaFormulario\Utilidad\TiposInput;


spl_autoload_register(function ($class) {
    $classPath = "../../";
    $file = str_replace('\\', '/', $class);
    require("$classPath${file}.php");
});

$form = new Formulario(" ",HttpMethod::POST);

$nombre = new CampoTexto("Nombre:",Evento::NOMBRE,TiposInput::TEXT,"nombre","Introduzca su nombre","El formato introducido es incorrecto");
$email = new CampoEmail("Email:",Evento::EMAIL,TiposInput::EMAIL,"email","info@gmail.com"," El formato de correo introducido es incorrecto");
$nombreGrupo = new CampoTexto("Nombre del grupo:",Evento::NOMBRE_GRUPO,TiposInput::TEXT,"nb_grupo","Introduzca el nombre del grupo"," Nombre del grupo incorrecto");



$form->addCampo($nombre);
$form->addCampo($email);
$form->addCampo($nombreGrupo);

function crearFormulario(Formulario $form) : string {
    $contenido = "";

    if(isset($_POST['Enviar'])){
        if($form->validarForm()){
            $evento = Evento::fromForm($form, $_POST);
    
            if (!is_null($evento)) {
                file_put_contents(
                    "Eventos.csv",
                    $evento->toCSV() . "\n"
                    // Esto no hace falta porque en el fichero solo puedes tener uno a la vez.
                    // , FILE_APPEND
                );
    
                //Redireccionar
                header("Location: fpdf184\\ticket.php");
                //salir
                //$contenido = $form->crearPagina(false);
                exit();
            }
            else {
                $contenido = $form->crearPagina(false);
            }        
        }else{

            $contenido = $form->crearPagina(false);
        }
    }else{
        $contenido = $form->crearPagina(true);
    }

    return $contenido;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario to guapo</title>
        <link rel='stylesheet' href='../LibreriaFormulario/css/estilosWeb.css' type='text/css'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    </head>
    <body>   
        <?= 
            crearFormulario($form);
        ?>
        <script>
            document.querySelectorAll("form").forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
            const checkboxes = document.getElementById("formulario").querySelectorAll('input[type=checkbox]');

            function atLeastOneCheckboxIsChecked() {
                const checkboxes = Array.from(document.querySelectorAll(".checkbox"));
                return checkboxes.reduce((acc, curr) => acc || curr.checked, false);
            }

            function init() {
                
                for (let i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].addEventListener('change', checkValidity);
                    checkValidity();
                }
            }

            function isChecked() {
                for (let i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) return true;
                }

                return false;
            }

            function checkValidity() {
                const errorMessage = !isChecked() ? 'Tiene que haber al menos un checkbox seleccionado.' : '';
                checkboxes.forEach((chk) => {
                    chk.setCustomValidity(errorMessage)
                });
            }

            init();
        </script>
        <pre>
            <?php print_r($_POST) ?>
        </pre>
        <pre>
            <?= $form->validarForm()? "true":"false" ?>
        </pre>
        <pre>
            <?php var_dump($_POST) ?>
        </pre>
    </body>
</html>
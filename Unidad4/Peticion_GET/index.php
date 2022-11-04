<?php

$tema="";
$hora=date("H");
/*echo $hora;*/
$minuto=date("i");
$opcionesMinuto =[0,15,30,45];

$mayores = array_filter($opcionesMinuto,function($m){
    global $minuto;
    return $m > $minuto;
});

if(empty($mayores)){
    $minuto = 0;
    $hora++;
    if($hora>23){
        $hora==00;
    }
}else{
    $minuto= array_shift($mayores);
}

$errores =[];

//verificar errores
if(isset($_POST['Enviar'])){
    if(!empty($_POST['tema'])){
        $tema = $_POST['tema'];
    }else{
        $errores['tema'] = 'No puede estar vacio';
    }

    if(!empty($_POST['hora'])){
        $hora = $_POST['hora'];
    }else{
        $errores['hora'] = 'No puede estar vacio';
    }

    if(!empty($_POST['minuto'])){
        $minuto = $_POST['minuto'];
    }else{
        $errores['minuto'] = 'No puede estar vacio';
    }

    if(count($errores) == 0){
        //Guardar
       file_put_contents(
        "temas.csv",
        "$tema;$hora;$minuto\n",
        FILE_APPEND
       );

        //Redireccionar
        header("Location: listado.php");

        //salir
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="centro">
                <div class="card">
                    <div class="card-body" id="formulario">
                        <form action="" method="post">
                            <h3>Party</h3>
                            <div>
                                <label>Tema:</label><br>
                                <input type="text" name="tema" id="tema" placeholder="Introduzca el titulo de la cancion" value="<?=$tema?>"><br><br>
                                <?php
                                    if(isset($errores['tema'])){
                                        echo "<div class='error'>";
                                        echo "<p>".$errores['tema']."</p>";
                                        echo "</div>";
                                    }
                                ?>
                            </div>
                            <div>
                                <label>Hora:</label><input type="number" name="hora" id="h" min="0" max="23" size="5" value="<?=$hora?>"><br><br>
                                <label>Min:</label>
                                <select name="minuto" id="minuto" value="<?=$minuto?>"> 
                                <?php 
                                    array_walk($opcionesMinuto, function($op, $key, $d){
                                        $sel = ($op==$d)?"selected":"";
                                        echo "<option value='$op' $sel>$op</option>";
                                    }, $minuto);
                                ?>
                                </select>
                                <?php
                                    if(isset($errores['hora'])){
                                        echo"<div class='error'>";
                                        echo"<p>".$errores['hora']."</p>";
                                        echo"</div>";
                                    }
                            
                                    if(isset($errores['minuto'])){
                                        echo"<div class='error'>";
                                        echo"<p>".$errores['minuto']."</p>";
                                        echo"</div>";
                                    }
                                ?>
                            </div>
                            <br><br>
                            <div class="d-grid gap-3">
                                <input type="submit" value="Enviar" name="Enviar" class="btn btn-primary btn-block" id="sub">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
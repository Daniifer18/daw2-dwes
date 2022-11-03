<?php


$temazo="";
$hora=date("h");
$min=date("i");
$opcionesMinuto= [0,15,30,45];

$mayores = array_filter($opcionesMinuto, function($m){
    global $min;
    return $m > $min;
});

if(empty($mayores)){
    $min = 0;
    $hora++;
}else{
    $min = array_shift($mayores);
}

$errores = [];

if(isset($_POST['Enviar'])) {
    if(!empty($_POST['tema'])) {
        $tema = $_POST['tema'];
    } else {
        $errores['tema'] = 'No puede estar vacío';
    }

    if(!empty($_POST['hora'])) {
        $hora = $_POST['hora'];
    } else {
        $errores['hora'] = 'La hora no puede estar vacía';
    }

    if(empty($errores)) {

        file_put_contents(
            "canciones.csv",
            "$tema;$hora\n",
            FILE_APPEND
        );

        header('Location: listado.php');

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
                        <form action="" type="POST">
                            <h3>Party</h3>
                            <div>
                                <label>Tema:</label><br>
                                <input type="text" name="tema" id="tema" placeholder="Introduzca el titulo de la cancion" required><br><br>
                                <?php
                                    if(isset($errores['temazo'])){
                                        echo "<div class='error'>";
                                        echo "<p>".$errores['temazo']."</p>";
                                        echo "</div>";
                                    }
                                ?>
                            </div>
                            <div>
                                <label>Hora:</label><input type="number" name="hora" id="h" min="0" max="23" size="5"><br><br>
                                <label>Min:</label>
                                <select>
                                <?php 
                                    array_walk($opcionesMinuto, function($op, $key, $d){
                                        $sel = ($op==$d)?"selected":"";
                                        echo "<option value='$op' $sel>$op</option>";
                                    }, $min);
                                ?>
                                </select>
                                <?php
                                    if(isset($errores['hora'])){
                                        echo "<div class='error'>";
                                        echo "<p>".$errores['hora']."</p>";
                                        echo "</div>";
                                    }

                                    if(isset($errores['min'])){
                                        echo "<div class='error'>";
                                        echo "<p>".$errores['min']."</p>";
                                        echo "</div>";
                                    }
                                ?>
                            </div>
                            <br><br>
                            <div class="d-grid gap-3">
                                <input type="submit" value="Enviar" class="btn btn-primary btn-block" id="sub">
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
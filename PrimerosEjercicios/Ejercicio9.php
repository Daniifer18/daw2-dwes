<?php 
    if(isset($_GET["cadena"])){
        $cadena= $_GET["cadena"];
    }else{
        $cadena = "";
    }

    $nueva_cadena = str_replace(" ","",$cadena);
    $nueva_cadena = strtolower($nueva_cadena);

    function Palindromo($nueva_cadena){
        $valido = true;
            for($i = 0;$i < strlen($nueva_cadena)/2 && $valido;$i++){
                if($nueva_cadena[$i] != $nueva_cadena[strlen($nueva_cadena) - $i - 1]){
                    $valido = false;
                }
            }
        return $valido;
    }
    
    function ContarVocales($nueva_cadena){
        $vocal = 0;
        for($j = 0;$j < strlen($nueva_cadena);$j++){
            if (in_array($nueva_cadena[$j], ["a", "e", "i", "o", "u"])) {
                    $vocal++;
            }
        }    
        return $vocal;
    }
            
    function ContarConsonantes($nueva_cadena){
        $con = 0;
        for($k = 0;$k < strlen($nueva_cadena);$k++){
            if (in_array($nueva_cadena[$k], ["a", "e", "i", "o", "u"])) {
                        
            }else{
                $con++;
            }
        }    
        return $con;
    }
    $num_vocal = ContarVocales($nueva_cadena);
    $num_con = ContarConsonantes($nueva_cadena);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO PALINDROMOS</title>
    <style>
        body{
            background-color: lightgrey;
        }
        form{
            border-radius: 5px solid black;
        }
    </style>
</head>
<body>
    <form type="GET" action="Ejercicio9.php">
        Escriba una cadena:<input type="text" name="cadena" value="<?= $cadena ?>">
        <input type="submit" value="Enviar">
        <br><br>   
        <div>
            <ul>
                <li>Número de vocales:<?php echo $num_vocal ?></li>
                <li>Número de consonantes:<?php echo $num_con ?></li>
                <li>Palindromo:<?php echo (Palindromo($nueva_cadena)? "Si":"No"); ?></li>
            </ul>
        </div>   
    </form>
</body>
</html>
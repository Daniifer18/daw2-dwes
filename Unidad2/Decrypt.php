<?php 

set_time_limit(0);

$hassh = file('hashProfe.txt');

foreach($hassh as $pass){
    $start = time();//Empieza un temporizador 
    echo descifrar(trim($pass), "");
    $end = time();//Acaba el temporizador

    echo "El tiempo de ejecucion ha sido de ". ($end - $start) ." minutos o segundos";
}

function descifrar($hassh , $respuesta){
    $array = array(
        'a','b','c','d','e','f','g','h','i',
        'j','k','l','m','n','o','p','q','r',
        's','t','u','v','w','x','y','z','0','1',
        '2','3','4','5','6','7','8','9'
    );

    $maxNum = 3;
    if(strlen($respuesta) > $maxNum){
        return;
    }

    for ($i=0; $i < count($array); $i++) { 
        $temp = $respuesta.$array[$i];

        if(md5($temp) == $hassh){
            return $temp;
        }

        $result = descifrar($hassh,$temp);
        if(strlen($result) > 0){
            return $result;
        }
    }
}

?>
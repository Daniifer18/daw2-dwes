<?php
/*
Enunciado: Crea una array bidimesional que guarda nombre de usuario y
contraseña de usuario en texto claro. array_walk ejecuta una funcion predefinida mostrando nombre de usuario y contraseña
*/

$users = [
	"Pepe" => "1234",
	"Ana" => "jjj321",
	"Mari" => "",
];


array_walk($users, function($k,$u){
    echo "Usuario: ". $u . ", contraseña: " . $k. "<br>";
});
echo "<br>";

/*
Enunciado: Utilizando las funciones de contraseñas y la función array_map. 
Genera un array nuevo con los usuarios y su contraseña en formato hash.
*/
$cifrado = array_map(function($valor){

    return password_hash("$valor", PASSWORD_DEFAULT);
},$users);

array_walk($cifrado, function($k,$kk){
    echo "$kk : " . $k. "<br>";
});

/*
Enunciado: En base al ejercicio anterior cambia la función para que los usuarios sin contraseña tenga la contraseña "tmp2022"
*/

function cambiar($pass){
    if($pass==""){
        $pass = "tmp2022";
    }
    return ($pass);
}

$users = array_map("cambiar",$users);

echo "<br>";

array_walk($users, function($k,$u){
    echo "Usuario: ". $u . ", contraseña: " . $k. "<br>";
});
echo "<br>";

/*
Enunciado: Haz un filtrado de usuarios sin contraseña, utiliza array_replace 
para establecer en el array original $usuariosla contraseña de los usuarios que no tenían.

*/

$newUsers = [
	"Pepe" => "",
	"Ana" => "jjj321",
	"Mari" => "",
];

$a = array_filter($newUsers,function($p){
    if($p[1] ==""){
        return $p[0]. " ," . $p[1];
    }
});

array_walk($a, function($k,$u){
    echo "Usuario: ". $u . ", contraseña: " . $k. "<br>";
});
echo "<br>";

$new = array_replace($a,$users);
echo "<br>";

array_walk($new, function($k,$u){
    echo "Usuario: ". $u . ", contraseña: " . $k. "<br>";
});
echo "<br>";

?>

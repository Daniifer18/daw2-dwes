<?php 

echo "Rellenar array<br>";
for ($i=0; $i < 20; $i++) { 
    $arr[$i] = rand(1,10);
}
foreach($arr as $a){
    echo $a."<br>";
}

echo "<br>Ordenar array<br>";
sort($arr);
foreach($arr as $a){
    echo $a."<br>";
}

echo "<br>Quitar parte de un array<br>";
$arr1 = array_slice($arr,3,11,true);
foreach($arr1 as $a){
    echo $a."<br>";
}
echo "<br>Poner al final la parte array<br>";
for ($i=0; $i < count($arr1); $i++) { 
    array_push($arr,$arr1[$i]);
}
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i]."  ";
}

?>
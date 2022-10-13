<?php 

$cad = "Cleopatra";

$i = 0;

while($i < strlen($cad) && $cad[$i] != "a" && $cad[$i] != "A"){
    echo "<h4>".$cad[$i]."</h4>";
    $i++;
}

?>
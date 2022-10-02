<?php 

$personas = [
    ["Jorge", 1],
    ["Bea", 0],
    ["Paco", 1],
    ["Amparo", 0],
];

$resultado = array_map(function($pep){
    return (($pep[1]== 1) ? "Señor ":"Señora "). $pep[0];
}
,$personas);

array_walk($resultado,function($sexo){
    echo "$sexo<br>";
}
);

echo "<br><br>";
echo "Hombres:\n";
$hombre = array_filter($personas,function($sexo){
    return  $sexo[1] == 1;
}
);
echo "<br>";
array_walk($hombre,function($sexo){
    echo "$sexo[0]<br>";
}
);

echo "<br>";
echo "Mujeres:\n";
$mujer = array_filter($personas,function($sexo){
    return  $sexo[1] == 0;
}
);
echo "<br>";
array_walk($mujer,function($sexo){
    echo "$sexo[0]<br>";
}
);


$comida = [

    0 => ["Banana", 3, 56],

    1 => ["Chuleta", 1, 256],

    2 => ["Pan", 1, 90],

];
echo "<br><br><br>";
echo "Las calorías de la comida son " . array_reduce($comida,function($acu,$elemento){
    return $acu + ($elemento[1]*$elemento[2]);
}
,0). " calorias";

?>
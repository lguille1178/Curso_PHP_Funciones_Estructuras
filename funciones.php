<?php
// function suma($a , $b=0){
//     echo "La suma de a + b es: ".$a+$b. "\n";
// }

// uso de funciones anonimas
$precios = [12,20,56,1];
usort($precios, function($a,$b){ // funcion anonima
    return $a <=> $b;
});

var_dump($precios);

function suma (...$hola){
    $suma = 0;
    foreach ($hola as $numero){
        $suma += $numero;
    }
    echo "La sumatoria es: $suma";
}

suma(1,2,3);
?>
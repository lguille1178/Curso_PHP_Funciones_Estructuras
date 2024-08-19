<?php

$posibles_palabras = ["Hola","Adios","Vemos","Huevos"];

define("INTENTOS",3);
$turno = 0;

echo "Comencemos el Juego \n\n";

// Escojemos la palabra a utilizar.
$palabra = strtolower($posibles_palabras[rand(0,3)]);
echo $palabra;
while ($turno <= INTENTOS) {
    $usuaro=strtolower(readline("Comensemos por favor escoge una letra"));
    if(str_contains($palabra, $usuaro)){
        echo "Se logoro perro";
    }else{
        echo "NOOO Se logoro perro";
        
        switch ($turno) {
            case 1:
                echo"8-8";
                break;
            case 2:
                echo"8-8, 8-8";
                break;
            case 3:
                echo"8-8, 8-8, 8-8 Muerto";
                break;        
            default:
                echo "Has perdido tu primer intento";
                break;
        }
        $turno++;
    }

}

<?php   
$curso = "PHP";

function path(&$curso){ // usando referencia cambiamos el valor original de la variable
    $curso = "HTML";
    echo $curso;
}

path($curso);
echo "\n $curso";

///// FUNCIONES ANONIMAS.

function greet(Closure $lang, $name) // Le indicamos con Clousure que recibira una funcion anonima. cualquiera 
{
    return $lang($name);
}

$es = function ($name){
    return "Hola, $name";
};

$en = function ($name){
    return "Hello, $name";
};

echo greet($es, 'Luis'); // le mandamos la funcioon anonima primero, 
// luego le mandamos el otro paramentro que necesita la funcion 
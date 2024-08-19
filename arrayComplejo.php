<?php   

$cursos = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

function upper($especificacion, $key)
{
    echo strtoupper($key).$especificacion;
}


array_walk($cursos, 'upper');


// foreach ($cursos as $key1 => $value) {
//     echo "$value: $key1";
// };

// foreach ($cursos as $curso) {
//     echo "$curso";
// }
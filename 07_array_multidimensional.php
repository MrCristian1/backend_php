<?php

$calificaciones = [
    "Ana" => [
        "Martematicas"=>3,
        "Historia"=>4,
        "Ingles"=>1
    ],
    "Juan" => [
        "Martematicas"=>3.5,
        "Historia"=>4.2,
        "Ingles"=>1
    ],
    "Pedro" => [
        "Martematicas"=>1,
        "Historia"=>1,
        "Ingles"=>1
    ],
];

echo "Total de calificacion: ".count($calificaciones,COUNT_RECURSIVE);

$calificaciones['Ana']['Matematicas']=5;

echo "<pre>";
print_r($calificaciones);
echo "</pre>";
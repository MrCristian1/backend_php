<?php
$nombres = ["Fabian","Juan","Ana"];
echo "<pre>";
print_r($nombres);
echo "</pre>";

$materias = array("Mathe", "Español", "Calculo");

echo "<pre>";
print_r($materias);
echo "</pre>";

//agregar items
$nombres[] = "Pedro";

echo "<pre>";
print_r($nombres);
echo "</pre>";

//mostrar el total de elementos
echo "El numero total de nombres es: ". count($nombres). '<br>';

//accede por los indices
echo 'El nombre indicide 2 es: '. $nombres[2] . '<br>';
echo ' El ultimo nombre es: '. end($nombres). '<br>';

//ordenar alfabeticamente
sort($nombres);
echo "<pre>";
print_r($nombres);
echo "</pre>";

//eliminar el ultimo elemento
array_pop($nombres);
echo "<pre>";
print_r($nombres);
echo "</pre>";


//eliminar por indices
unset($nombres[1]);
echo "<pre>";
print_r($nombres);
echo "</pre>";
<?php 

/**
* Ejercicio 3: Programa que compruebe si una variable esta vacia, rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
*/

// Paso 1: Crear una variable vacia
$variable = "";

// Paso 2: Comprobar si está vacía
if(empty($variable)) {
    // Si está vacía, asignar un texto en minúsculas
    $variable = "nuevo texto";
}
// Paso 3: Convertir el texto a mayúsculas y mostrarlo en negrita
echo strtoupper("<b>$variable</b>");

?>
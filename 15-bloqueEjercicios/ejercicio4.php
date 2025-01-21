<?php 
/**
 *Crear un script en PHP que tenga 4 variables, una de tipo array, otra de tipo string, otra de tipo int y otra booleana y que imprima un mensaje segun el tipo de variable que sea. 
*/

$matriz = array("Hola mundo", 88);
$titulo = "Master en PHP";
$numero = 77;
$verdadero = true;

if (is_array($matriz)) {
    echo "<h1>Esta variable es un array</h1>";
}

if (is_string($titulo)) {
    echo "<h1>$titulo</h1>";
}

if (is_int($numero)) {
    echo "<h1>$numero</h1>";
}

if (is_bool($verdadero)) {
    echo "<h1>Esta variable es un Booleano</h1>";
}

?>
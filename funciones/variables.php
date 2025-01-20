<?php 
    /*
        Variables locales: Son las que se definen dentro de una función y no pueden ser usadas fuera de la función, solo estan disponibles dentro. A no ser que hagamos un return.
        Variables globales: Son las que se declaran fuera de una función y estan disponibles dentri y fuera de las funciones.
    */

    $frase = "Ni los genios son tan genios, ni los mediocres son tan mediocres";

    echo $frase;

    function holaMundo() {
        global $frase; // Con esto se puede acceder a la variable global.

        echo "<h1>$frase</h1>";

        $year = 2025;
        echo "<h1>$year</h1>";

        return $year;
    }

     echo holaMundo();

    //echo $year; // Esta variable no se puede acceder porque es una variable Local.

    // Funcione variables

    function buenasDias() {
        return "<h1>Hola! Buenos dias :)</h1>";
    }

    function buenasTardes() {
        return "<h1>Hey! Que tal te fue en la comida??</h1>";
    }

    function buenasNoches() {
        return "<h1>¿Te vas a dormir ya? Buenas noches!!</h1>";
    }

    // $horario = $_GET['horario'];
    $horario = "Noches";

    $miFuncion = "buenas".$horario;
    echo $miFuncion();

?>
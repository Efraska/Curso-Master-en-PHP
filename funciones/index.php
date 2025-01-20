<?php 

/*
    Funciones: es un conjunto de instrucciones agrupadas bajo un nombre concreto
    y que pueden reutilizarse solamente invocando a la función tantas veces como queramos.

    function nombreDeMiFuncion($parametro) {
        bloque - conjunto de instrucciones
    }

    nombreDeMiFuncion($mi_parametro);
    nombreDeMiFuncion($mi_parametro);
*/

// Ejemplo 1
// function muestraNombres() {
//     echo "Efrain Arevalo <br/>";
//     echo "Juan Arevalo <br/>";
//     echo "Roberto Arevalo <br/>";
//     echo "Mariana Arevalo <br/>";
//     echo "<hr/>";
// }

// //Invocar funcion
// muestraNombres();
// muestraNombres();
// muestraNombres();

//Ejemplo 2
function tabla($numero) {
    echo "<h3> Tabla de multiplicar del número: $numero </h3>";

    for ($i = 1; $i <= 10; $i++) { 
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br/>";
    }
}

// if(isset($_GET['numero'])) {
//     tabla($_GET['numero']);
// }else {
//     echo "No hay numero para sacar la tabla";
// }

// for($i = 1; $i <= 10; $i++) {
//     tabla($i);
// }

// Ejemplo 3

function calculadora($numero1 , $numero2, $negrita = false) {

    // Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi= $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if ($negrita) {
        $cadena_texto .= "<h1>";
    }

    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multiplicación: $multi <br/>";
    $cadena_texto .= "División: $division <br/>";

    if ($negrita) {
        $cadena_texto .= "</h1>";
    }

    $cadena_texto .= "<hr/>";

    return $cadena_texto;
}
echo calculadora(10, 30);
echo calculadora(20, 50, true);
echo calculadora(40, 60);

// Ejemplo 4

function getNombre($nombre) {
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos) {
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos) {
    $texto = getNombre($nombre)
            ."<br/>".
            getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre("Efrain", "Arevalo Perez");
<?php 
    /**
     * Escribir un programa con PHP que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla
     */
    
    //  Paso 1: Inicializar el array vacio
     $arregloVacio = [];

    //  Paso 2: Añadir valores al array mientras su longitud sea menor a 120 
     while (count($arregloVacio) < 120 ){
        // Podemos añadir cualquier valor al array, por ejemplo, un número
        $arregloVacio[] = rand(1, 100); // Añadimos un numero aleatorio entre 1 y 100
     }

    //  Paso 3: Mostrar el contenido del array
    // echo "<pre>";
    // print_r($arregloVacio);
    // echo "</pre>";

    $coleccion = array();

    for ($i = 0; $i < 120; $i++) { 
        array_push($coleccion, "elemento-".$i);
    }

    echo "<pre>";
    var_dump($coleccion);
    echo "</pre>";

?>
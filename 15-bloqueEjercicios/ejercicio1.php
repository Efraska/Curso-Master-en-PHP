<?php 
    /**
     * Ejercicio 1: Hacer un programa en PHP que tenga un array con 8 numeros enteros
     * y que haga lo siguiente:
     * -Recorrerlo y mostrarlo
     * -Ordenarlo y mostrarlo
     * -Mostrar su longitud
     * -Busca algun elemento
     */

     $numeros = [1,3,6,4,5,7,2,8];
    
     echo "<h1>Mostrando Array</h1>";

     echo "<ul>";

     // Recorrer y mostrar
    for ($i = 0; $i < count($numeros) ; $i++) { 
        echo "<li>".$numeros[$i]."</h1>";
    }
   
    echo "</ul>";

    //Ordenar
    sort($numeros);
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    // Contar elementos
    echo sizeof($numeros);

    // Buscar dentro de un array
    $resultado = array_search('8', $numeros);
    echo "<pre>";
    var_dump($resultado);
    echo "</pre>";

?>
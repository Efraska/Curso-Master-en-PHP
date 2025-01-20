<?php 

    // Funciones predefinidas

    echo date('d-m-Y');
    echo "<br>";
    echo time();
    echo "<br>";

    // Matematicas
    echo "Raiz cuadrada de 10: ".sqrt(10);
    echo "<br>";
    echo "Número aleatorio entre 10 y 40: ".rand(10, 40);
    echo "<br>";
    echo "Número PI: ".pi();
    echo "<br>";
    echo "Redondear: ".round(7.891234, 2);
    echo "<br>";

    // Más funciones generales
    echo gettype(7.8);
    echo "<br>";

    if(is_string("Hola mundo")) {
        echo "Esa variable es un string";
    }
    echo "<br>";

    if(is_float(7.8)) {
        echo "Esa variable es un float";
    }
    echo "<br>";

    if(is_integer(7)) {
         echo "Esa variable es un integer";
    }
    echo "<br>";

     if(is_array($array = [])) {
         echo "Esa variable es un array";
     }
     echo "<br>";

    if(is_object($obj = (object) 'ciao')) {
        echo "Esa variable es un objeto";
    }
    echo "<br>";

    if(is_bool(true)) {
        echo "Esa variable es un boolean";
    }
    echo "<br>";

    if(is_double($duble = 7.8)) {
        echo "Esa variable es un double";
    }
    echo "<br>";

    if(empty($vacia ="")) {
        echo "La variable está vacía";
    }
    echo "<br>";

    $apellido = "Arevalo";
    if(isset($apellido)) {
        echo "La variable existe";
    }
    echo "<br>";

    // Comprobar si una variable está definida
    $variable = "";
    if(isset($variable)) {
        echo "La variable existe";
    } else {
        echo "La variable no existe";
    }
    echo "<br>";

    // Limpiar espacios
    $frase = "    mi contenido    ";
    var_dump(trim($frase));
    echo "<br>";

    // Eliminar variables / indices
    $year = 2020;
    unset($year);
    //var_dump($year);

    // Comprobar variable vacía
    $texto = "";
    if(empty($texto)) {
        echo "La variable texto está vacia";
    } else {
        echo "La variable texto tiene contenido";
    }
    echo "<br>";

    // Contar caracteres de u string
    $cadena = "12345";
    echo strlen($cadena);
    echo "<br>";

    // Encontrar caracter
    $frase = "La vida es bella";
    echo strpos($frase, "vida"); // Devuelve la posición de la primera coincidencia
    echo "<br/>";

    // Reemplazar palabras de un string
    $frase = str_replace("vida", "moto", $frase);
    echo $frase;

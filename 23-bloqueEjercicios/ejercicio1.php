<?php

/**
 * Crear una sesión que aumente su valor en uno o disminuya en uno en función de si el parametro get counter está a uno o a cero.
 */

// Paso 1: Iniciar la sesión
session_start();

// Paso 2: Verificar si la sesión 'contador' existe, si no, inicializarla en 0
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
} 

// Paso 3: verificar si se ha recibido el parámetro GET 'counter'
if (isset($_GET['counter'])) {
    //Paso 4: Incrementar o decrementar el contador dependiendo del valor de 'counter'
    if ($_GET['counter'] == 1) {
        $_SESSION['contador']++;
    } elseif ($_GET['counter'] == 0) {
        $_SESSION['contador']--;
    }
}

// Paso 5: Mostrar el valor actual del contador
echo "El valor actual del contador es: " . $_SESSION['contador'] . "<br>";

?>

<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>
<?php 

/**
 * SESIÓN: Almacenar y persistir los datos del usuario mientras que navega en un sitio web hasta que cierra sesión o cierra el navegador.
 */

// Iniciar la sesion
session_start();

// Variable normal
$variable_normal = "Soy una cadena de texto";

// Variable de sesión
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];

?>
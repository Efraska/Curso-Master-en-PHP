<?php 

/**
 * Para mostrar el valos de las cookies, tengo que usar $_COOKIE, una variable superglobal, es un array asociativo
 */

if ($_COOKIE['micookie']) {
    echo "<h1>".$_COOKIE['micookie']."</h1>";
} else {
    echo "No existe la cookie";
}

if ($_COOKIE['unyear']) {
    echo "<h1>".$_COOKIE['unyear']."</h1>";
} else {
    echo "No existe la cookie";
}

?>

<a href="eliminar_cookies.php">Borrar mis Galletas</a>
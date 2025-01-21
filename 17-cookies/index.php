<?php 

/**
 *COOKIES: Las cookies son pequeños archivos o fragmentos de información que los sitios web envían y almacenan en el navegador de los usuarios mientras navegan por Internet. Estas cookies permiten que los sitios web recuerden información sobre la visita del usuario, como preferencias, historial de navegación o datos de sesión, para mejorar la experiencia y funcionalidad del sitio.
 */

//  Crear cookie
//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

// Crear una cookie
// setcookie("usuario", "Juan", time() + 3600); // Expira en 1 hora

// Leer una cookie
// if (isset($_COOKIE["usuario"])) {
//     echo "Bienvenido, " . $_COOKIE["usuario"];
// } else {
//     echo "Cookie no encontrada";
// }

// Cookie basica
setcookie('micookie', "valor de mi galleta");

// Cookie con expiración
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las Galletas</a>
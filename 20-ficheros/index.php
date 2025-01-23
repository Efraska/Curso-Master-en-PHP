<?php

// Abrir archivo
// $archivo = fopen("fichero_texto.txt", "a+");

// leer contenido
// while(!feof($archivo)) {
//     $contenido = fgets($archivo);
//     echo $contenido."<br/>";
// }

// Escribir
// fwrite($archivo, "*** Soy un texto metido desde PHP ***");

// Cerrar archivo
// fclose($archivo);

// Copiar un archivo
// copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

// renombrar
// rename('fichero_copiado.txt', 'fichero_renombrado.txt');

// Eliminar
// unlink('fichero_renombrado.txt') or die("Error al borrar");

// Comprobar si un fichero/archivo existe
if (file_exists("fichero_texto1.txt")) {
    echo "El archivo existe!!";
} else {
    echo "NO EXISTE!!";
}


<?php
if (!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777) or die ('No se puede crear la carpeta');
} else {
    echo "Ya existe la carpeta";
}

// Borrar directorios
//rmdir('mi_carpeta');
echo "<hr>";
echo "<h1>Contenido de Carpeta</h1>";
if ($gestor = opendir('./mi_carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo != '..') {
            echo $archivo."<br/>";
        }
    }
}

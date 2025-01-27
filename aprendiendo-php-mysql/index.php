<?php 
// Conectar a la base de datso
$conexion = mysqli_connect("localhost", "root", "admin", "phpmysql");

// Comprobar si la conexion es correcta
if (mysqli_connect_errno()) {
    echo " La conexion a la base de datos MySQL ha fallado: ".mysqli_connect_error();
} else {
    echo "Conexión realizada correctamente!!";
}

echo "<br/>";

// Cnnsulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)) {
    // echo "<pre>";
    // var_dump($nota);
    // echo "</pre>";
    echo "<h2>".$nota['titulo']."</h2>";
    echo $nota['descripcion'].'<br/>';
}

// Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES(NULL, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

echo "<hr/>";
if ($insert) {
    echo "DATOS INSERTADOS CORRECTAMENTE";
} else {
    echo "ERROR: ".mysqli_error($conexion);
}

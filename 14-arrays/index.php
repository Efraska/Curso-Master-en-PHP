<?php 
/**
 * Un array es una coleccion o conjunto de datos/valores, bajo un unico nombre.
 * Para conocer a esos valores podemos usar un indice numerico o alfanumerico. 
 */

 $pelicula = "Super cool";
 $peliculas = array('X-Men', 'Deadpool', 'Deadpool 2');
 $reggaeBands = ['Stick figure', 'Mellow Mood', 'Alborosie'];

 // Array asociativo
 $personas = array(
    'nombre' => 'Efraín',
    'apellidos' => 'Arevalo',
    'github' => 'Efraska' 
 );

 echo "<pre>";
 var_dump($personas);
 echo "</pre>";

 echo $personas['github'];

 // echo "<pre>";
 // var_dump($peliculas[0]);
 // echo "</pre>";
 // echo $peliculas[0];
 // echo "<br/>";
 // echo $reggaeBands[2];

 // Recorrer con for
 echo "<h1>Listado de peliculas</h1>";

 echo "<ul>";

    for ($i = 0; $i < count($peliculas); $i++) { 
        echo "<li>".$peliculas[$i]."</h1>";
    }

 echo "</ul>";

 // Recorrer con Foreach
 echo "<h1>Listado de bandas de reggae</h1>";

 echo "<ul>";
 foreach ($reggaeBands as $band) {
    echo "<li>".$band."</li>";
 }
 echo "</ul>";

 // Arrays multidimensionales

 $contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Efrain',
        'email' => 'efras@efras.com'
    )
 );

 foreach ($contactos as $key => $contacto) {
    echo "<pre>";
    var_dump($contacto['nombre']);
    echo "</pre>";
 }
?>
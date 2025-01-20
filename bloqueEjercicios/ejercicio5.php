<?php 
    /*
        Hacer un programa que muestre todos los numeros entre dos numeros que nos lleguen por la URL($_GET)
    */

    if (!isset($_GET['inicio']) || !isset($_GET['fin'])) {
        echo "Faltan parámetros.";
        exit;
    }

    $inicio = $_GET['inicio'];
    $fin = $_GET['fin'];

    if (!is_numeric($inicio) || !is_numeric($fin)) {
        echo "Los valores deben ser números.";
        exit;
    }

    if ($inicio > $fin) {
        $temp = $inicio;
        $inicio = $fin;
        $fin = $temp;
    }

    for ($i = $inicio; $i <= $fin ; $i++) { 
        echo $i . "<br/>";
    }
<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

// Conexión base de datos
// $db = Database::connect();

function show_error() {
    $error = new errorController();
    $error->index();
}

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;
} else {
    show_error();
    exit();
}

if (isset($nombre_controlador) && class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && isset($_GET['id']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $id =(int)$_GET['id'];
        $controlador->$action($id);
    }else {
        // Si hay una acción definida, ejecutar la acción por defecto
        $action_default = action_default;
        if (method_exists($controlador, $action_default)) {
            $controlador->$action_default();
        } else {
            show_error();
        }
    }
} else {
    show_error();
}

require_once 'views/layout/footer.php';
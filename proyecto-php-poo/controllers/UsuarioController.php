<?php

class UsuarioController {
    public function index() {
        echo "Controlador Usuarios, Acción Index";
    }
    public function registro() {
        require_once 'views/usuario/registro.php';
    }
    public function save() {
        if (isset($_POST)) {
            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";
        }
    }
}
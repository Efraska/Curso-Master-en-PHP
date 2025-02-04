<?php 
    class NotaController {
        public function listar() {
            // Modelo
            require_once 'models/nota.php';

            // Lógica accion del Controlador
            $nota = new Nota();
            $nota->setNombre("Hola");
            $nota->setContenido("Hola Mundo PHP MVC");

            // vista
            require_once 'views/nota/listar.php';
        }
        public function crear() {

        }
        public function borrar() {

        }
    }
?>
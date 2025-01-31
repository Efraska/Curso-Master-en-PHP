<?php 
// Programación Orientada a Objetos en PHP (POO)

// Definir una clase - Molde para crear más objetos de tipo coche con caracteristicas parecidas
class Coche {
    // Atributos o propiedades (es lo que en la programación estructurada las conocemos como variables)
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    // Métodos, son acciones que hace el objeto -- (funciones en programación estructurada)
    public function getColor() {
        // En este contexto la palabra 'this' significa, busca en esta clase la propiedad x
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function acelerar() {
        $this->velocidad++;
    }

    public function frenar() {
        $this->velocidad--;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }
} // fin definicion de la clase

// Crear un objeto | Instanciar la clase
$coche = new Coche();

// Usar los metodos para conseguir los valores que tiene esta clase
echo "El coche viaja a una velocidad de: ". $coche->getVelocidad(). "km/h" .'<br/>';

$coche->setColor("Amarillo");
echo "El color del coche es: " .$coche->getColor().'<br/>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2->setColor("verde");
$coche2->setModelo("Gallardo");

echo "<pre>";
var_dump($coche);
echo "</pre>";

echo "<pre>";
var_dump($coche2);
echo "</pre>";
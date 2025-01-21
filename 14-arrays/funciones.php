<?php

$cantantes = ['Alboosie', 'Mellow Mood', 'Stick fugure', 'Steel Pulse'];
$numeros = [1,2,5,8,3,4];

//Ordenar
sort($numeros);
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Añadir elementos a un array
$cantantes[] = "Third World";
array_push($cantantes, "Alpha Blondy");
echo "<pre>";
var_dump($cantantes);
echo "</pre>";

// Elminar elementos de un array
array_pop($cantantes);
unset($cantantes[2]);
echo "<pre>";
var_dump($cantantes);
echo "</pre>";

// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Invertir
echo "<pre>";
var_dump(array_reverse($numeros));
echo "</pre>";

// Buscar dentro de un array
$resultado = array_search('Mellow Mood', $cantantes);
echo "<pre>";
var_dump($resultado);
echo "</pre>";

// Contar elementos
echo sizeof($cantantes);
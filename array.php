<?php

$frutas = ["manzana", "caña", "kiwi", "pera"];

// este metodo es para agregar un elemento al final del arreglo
$frutas[] = "sandia";
print_r($frutas);

echo "<br>";

// forma de eliminar un elemento de un array
$frutaEliminar = "kiwi";

$llave = array_search($frutaEliminar, $frutas);

if ($llave !== false) {
    unset($frutas[$llave]);
    // el metodo unset eliminar variables, elementos de arreglos y propiedades de objetos
}
print_r($frutas);

echo "<br>";


// modificar un elemento
$frutas[0] = "datil";
print_r($frutas);


echo "<br>";

//extraer un elemento
$frutasExtraer = array_slice($frutas, 1, 3);
print_r($frutasExtraer);


echo "<br>";

//filtro de elementos

$numeros = [1, 2, 3, 6, 8, 4, 9];

$filtro = array_filter($numeros, function ($valor) {
    return $valor >= 6 && $valor < 9;
});


//ordenamiento de arreglos de menor a mayor
asort($numeros);
print_r($numeros);


// unificacion de arreglos

$datos1 = [1, 2, 3, 4, 5];
$datos2 = [6, 7, 8, 9, 10];

$datosUnificados = array_merge($datos1, $datos2);
print_r($datosUnificados);

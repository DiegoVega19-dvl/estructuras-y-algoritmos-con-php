<?php

$arreglo = [];

array_push($arreglo, "elemento 1");
array_push($arreglo, "elemento 2");
array_push($arreglo, "elemento 3"); // este fue el ultimo elemento en entrar y fue el primero en salir

print_r($arreglo);

//con el metodo pop se elimina el ultimo elemento de la pila
$elemento = array_pop($arreglo);
echo "<br>";
echo "el ultimo $elemento fue eliminado de la pila";

echo "<br>";

print_r($arreglo);

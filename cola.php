<?php

$cola = [];

echo "las colas siguen el principio FIFO";
echo "<br>";

array_push($cola, "cliente 1");
array_push($cola, "cliente 2");
array_push($cola, "cliente 3");
array_push($cola, "cliente 4");
array_push($cola, "cliente 5");

print_r($cola);
echo "<br>";

echo "con el metodo shift elimina el primer elemento de la cola";

echo "<br>";

$clientes = array_shift($cola); // el metodo shift elimina el primer elemento de la cola

echo "<br>";

print_r($clientes);
echo "<br>";
print_r($cola);



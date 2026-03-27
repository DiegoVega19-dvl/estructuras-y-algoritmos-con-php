<?php

class Nodo
{
    public string $dato;
    public $siguiente;

    public function __construct(string $dato)
    {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

class ListaEnlazada
{
    public $cabezal;

    public function __construct()
    {
        $this->cabezal = null;
    }

    public function insertar(string $dato)
    {
        $nuevoNodo = new Nodo($dato);
        $nuevoNodo->siguiente = $this->cabezal;
        $this->cabezal = $nuevoNodo;
    }

    public function imprimirHTML()
    {
        $actual = $this->cabezal;
        echo "<ul>";
        while ($actual != null) {
            echo "<li>" . $actual->dato . "</li>";
            $actual = $actual->siguiente;
        }
        echo "</ul>";
    }
}

$lista = new ListaEnlazada();
$lista->insertar("elemento 1");
$lista->insertar("elemento 2");
$lista->insertar("elemento 3");
$lista->insertar("elemento 4");
$lista->imprimirHTML();

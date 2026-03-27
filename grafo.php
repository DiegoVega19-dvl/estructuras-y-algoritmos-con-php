<?php

class Grafo
{
    public $vertices;
    public $aristas;

    public function __construct()
    {
        $this->vertices = array();
        $this->aristas = array();
    }

    public function agregarVertices($vertice)
    {
        $this->vertices[] = $vertice;
        $this->aristas[$vertice] = array();
    }

    public function agregarArista($vertice1, $vertice2)
    {
        $this->aristas[$vertice1][] = $vertice2;
        $this->aristas[$vertice2][] = $vertice1;
    }

    public function imprimirGrafo()
    {
        foreach ($this->vertices as $vertice) {
            echo $vertice . "  ->  ";


            foreach ($this->aristas[$vertice] as $item) {
                echo $item . "  ";
            }

            echo "\n";
        }
    }
}

$migrafo = new Grafo();
$migrafo->agregarVertices(" A ");
$migrafo->agregarVertices(" B ");
$migrafo->agregarVertices(" C ");
$migrafo->agregarVertices(" D ");

$migrafo->agregarArista(" A ", " B ");
$migrafo->agregarArista(" B ", " C ");
$migrafo->agregarArista(" C ", " A ");
$migrafo->agregarArista(" B ", " D ");

echo "grafo resultante: \n";

$migrafo->imprimirGrafo();

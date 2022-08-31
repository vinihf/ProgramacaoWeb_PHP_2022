<?php
require "Pais.class.php";

$c1 = new Cidade("Curitiba");
$c2 = new Cidade("Maringá");
$c3 = new Cidade("Londrina");
$e1 = new Estado("PR");
$e1->adicionaCidade($c1);
$e1->adicionaCidade($c2);
$e1->adicionaCidade($c3);

$c4 = new Cidade("Lages");
$c5= new Cidade("Florianípolis");
$e2 = new Estado("SC");
$e2->adicionaCidade($c4);
$e2->adicionaCidade($c5);

$c6 = new Cidade("Bento Gonçalves");
$c7= new Cidade("Farroupilha");
$c8 = new Cidade("Caxias do Sul");
$c9= new Cidade("Garibaldi");
$e3 = new Estado("RS");
$e3->adicionaCidade($c6);
$e3->adicionaCidade($c7);
$e3->adicionaCidade($c8);
$e3->adicionaCidade($c9);

$p1 = new Pais();
$p1->adicionaEstado($e1);
$p1->adicionaEstado($e2);
$p1->adicionaEstado($e3);
echo $p1->montaTabela();









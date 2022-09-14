<?php
require_once __DIR__."/vendor/autoload.php";

//Inserindo novo registro no banco
$pessoa = new Pessoa("Primeira usuária","meuemail@email.com");
$pessoa->save();

//Atualizando registro no banco
$p = Pessoa::find(7);
$p->setEmail("troquei-email@email.com");
$p->save();

//Pesquisando um registro
$p2 = Pessoa::find(7);
echo $p2->getNome();

//Deletando um registro
$p2->delete();


<?php
require_once "Usuario.php";

$u1 = new Usuario(1,"Vinicius");
//$u1->save();
//$u2 = new Usuario(2,"Vanessa");
//$u2->save();
//$u3 = new Usuario(3,"Nicolau");
//$u3->save();

//$u1->criarRelacao($u2);
//$u1->criarRelacao($u3);
$u1->exibirRelacoes();
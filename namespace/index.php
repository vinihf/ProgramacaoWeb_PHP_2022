<?php

require_once __DIR__."/src/Classes/Argentina/Pessoa.php";
require_once __DIR__."/src/Classes/Brasil/Pessoa.php";

$p1 = new Classes\Argentina\Pessoa("Pedro");
$p2 = new Classes\Brasil\Pessoa("Pedro");

echo $p1->getNombre();
echo $p2->getNome();
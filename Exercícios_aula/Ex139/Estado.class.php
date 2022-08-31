<?php
require "Cidade.class.php";

class Estado{

    private array $cidades;

    public function __construct(private string $nome){

    }

    public function getNome():string{
        return $this->nome;
    }

    public function adicionaCidade(Cidade $cidade):void{
        $this->cidades[] = $cidade;
    }

    public function getListaCidades():array{
        return $this->cidades;
    }

}
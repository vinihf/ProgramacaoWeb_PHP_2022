<?php
namespace Classes\Brasil;

class Pessoa{
    
    public function __construct(private string $nome){
    }

    public function getNome(){
        return $this->nome;
    }
}
<?php
namespace Classes\Argentina;

class Pessoa{
    
    public function __construct(private string $nombre){
    }

    public function getNombre(){
        return $this->nombre;
    }
}
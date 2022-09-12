<?php
class Retangulo{
    
    public function __construct(private float $ladoMaior = 0.0,private float $ladoMenor=0.0){
    }

    public function setLadoMaior(float $maior):void{
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor(float $menor):void{
        $this->ladoMenor = $menor;
    }

    public function calculaArea():float{
        return $this->ladoMaior*$this->ladoMenor;
    }
}
<?php
class Sequencia{
    
    public function __construct(private int $inicio = 1,private int $fim=100){
    }

    public function setInicio(int $inicio):void{
        $this->inicio = $inicio;
    }

    public function setFim(int $fim):void{
        $this->fim = $fim;
    }

    public function exibirTodosNumeros():void{
        $auxiliar = $this->inicio;
        while ($auxiliar<=$this->fim){
            echo $auxiliar;
            $auxiliar++;
            echo "<br>";
        }
    }

    public function exibirPares():void{
        $auxiliar = $this->inicio;
        while ($auxiliar<$this->fim){
            if($auxiliar%2==0){
                echo $auxiliar;
                echo "<br>";
            }
            $auxiliar++;
        }
    }

    public function exibirImpares():void{
        $auxiliar = $this->inicio;
        while ($auxiliar<$this->fim){
            if($auxiliar%2!=0){
                echo $auxiliar;
                echo "<br>";
            }
            $auxiliar++;
        }
    }
}
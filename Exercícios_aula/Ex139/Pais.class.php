<?php
require "Estado.class.php";

class Pais{

    private array $estados;

    public function __construct(){

    }

    public function adicionaEstado(Estado $estado):void{
        $this->estados[] = $estado;
    }

    public function montaTabela():string{
        $html = "<table>
        <tr>
            <th>Estado</th>
            <th>Cidade</th>
        </tr>";
        foreach($this->estados as $estado){
            $html.= "<tr><td>{$estado->getNome()}</td><td>";
            $cidades = $estado->getListaCidades();
            foreach($cidades as $cidade){
                $html.=$cidade->getNome()."<br>";
            }
            $html.="</td></tr>";
        }
        $html.="</table>";
        return $html;
    }

}
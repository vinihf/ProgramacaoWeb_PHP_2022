<?php
require_once "MySQL.class.php";

class Usuario{

    private array $relacoes;

    public function __construct(private int $id = 0, private string $nome = ""){
    }

    public function criarRelacao(Usuario $u){
        $this->relacoes[] = $u;
        $db = new MySQL();
        $sql = "INSERT INTO relacoes(idOrigem,idDestino) VALUES ({$this->id},{$u->getId()})";
        $db->executa($sql);
        return true;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getId(){
        return $this->id;
    }

    public function exibirRelacoes(){
        $db = new MySQL();
        $sql = "select u.id, u.nome from usuarios u inner join relacoes r on r.idDestino=u.id and r.idOrigem={$this->id};";
        $this->relacoes = $db->consulta($sql);
        foreach($this->relacoes  as $relacao){
            $relacao = new Usuario($relacao['id'],$relacao['nome']);
            echo $this->nome." - >".$relacao->getNome()."<br>";
        }
    }

    public function save(){
        $db = new MySQL();
        $sql = "INSERT INTO usuarios(nome) VALUES ('{$this->nome}')";
        $db->executa($sql);
        return true;
    }
    

}
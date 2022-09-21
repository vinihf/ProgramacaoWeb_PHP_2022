<?php

class Festa implements ActiveRecord{

    private int $id;
    
    public function __construct(
        private string $nome,
        private string $endereco,
        private string $cidade,
        private string $data){
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    public function getId():int{
        return $this->id;
    }

    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function getNome():string{
        return $this->nome;
    }

    public function setEndereco(string $endereco):void{
        $this->endereco = $endereco;
    }

    public function getEndereco():string{
        return $this->endereco;
    }
    
    public function setCidade(string $cidade):void{
        $this->cidade = $cidade;
    }

    public function getCidade():string{
        return $this->cidade;
    }

    public function setData(string $data):void{
        $this->data = $data;
    }

    public function getData():string{
        return $this->data;
    }

    public function save():bool{
        $conexao = new MySQL();
        if(isset($this->id)){
            $sql = "UPDATE festas SET nome = '{$this->nome}' ,endereco = '{$this->endereco}',cidade = '{$this->cidade}',data = '{$this->data}' WHERE idFesta = {$this->id}";
        }else{
            $sql = "INSERT INTO festas (nome,endereco,cidade,data) VALUES ('{$this->nome}','{$this->endereco}','{$this->cidade}','{$this->data}')";
        }
        return $conexao->executa($sql);
        
    }
    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM festas WHERE idFestas = {$this->idFesta}";
        return $conexao->executa($sql);
    }

    public static function find($id):Festa{
        $conexao = new MySQL();
        $sql = "SELECT * FROM festas WHERE idFesta = {$id}";
        $resultado = $conexao->consulta($sql);
        $p = new Festa($resultado[0]['nome'],$resultado[0]['endereco'],$resultado[0]['cidade'],$resultado[0]['data']);
        $p->setId($resultado[0]['idFesta']);
        return $p;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM festas";
        $resultados = $conexao->consulta($sql);
        $festas = array();
        foreach($resultados as $resultado){
            $p = new Festa($resultado['nome'],$resultado['endereco'],$resultado['cidade'],$resultado['data']);
            $p->setId($resultado['idFesta']);
            $festas[] = $p;
        }
        return $festas;
    }

    
}

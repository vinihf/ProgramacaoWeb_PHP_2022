<?php

class Festa implements ActiveRecord{

    private int $idFesta;
    
    public function __construct(
        private string $nome,
        private string $endereco,
        private string $cidade,
        private string $data){
    }

    public function setIdFesta(int $idFesta):void{
        $this->idFesta = $idFesta;
    }

    public function getIdFesta():int{
        return $this->idFesta;
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
        if(isset($this->idFesta)){
            $sql = "UPDATE festas SET nome = '{$this->nome}' ,endereco = '{$this->endereco}',cidade = '{$this->cidade}',data = '{$this->data}' WHERE idFesta = {$this->idFesta}";
        }else{
            $sql = "INSERT INTO festas (nome,endereco,cidade,data) VALUES ('{$this->nome}','{$this->endereco}','{$this->cidade}','{$this->data}')";
        }
        return $conexao->executa($sql);
        
    }
    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM festas WHERE idFesta = {$this->idFesta}";
        return $conexao->executa($sql);
    }

    public static function find($idFesta):Festa{
        $conexao = new MySQL();
        $sql = "SELECT * FROM festas WHERE idFesta = {$idFesta}";
        $resultado = $conexao->consulta($sql);
        $p = new Festa($resultado[0]['nome'],$resultado[0]['endereco'],$resultado[0]['cidade'],$resultado[0]['data']);
        $p->setIdFesta($resultado[0]['idFesta']);
        return $p;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM festas";
        $resultados = $conexao->consulta($sql);
        $festas = array();
        foreach($resultados as $resultado){
            $p = new Festa($resultado['nome'],$resultado['endereco'],$resultado['cidade'],$resultado['data']);
            $p->setIdFesta($resultado['idFesta']);
            $festas[] = $p;
        }
        return $festas;
    }

    
}

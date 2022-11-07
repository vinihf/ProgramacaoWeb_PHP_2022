<?php

class Pessoa implements ActiveRecord{

    private int $id;
    private int $idUsuario;
    private $foto;

    public function __construct(private string $nome,private string $email){
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    public function setIdUsuario(int $idUsuario):void{
        $this->idUsuario = $idUsuario;
    }

    public function getId():int{
        return $this->id;
    }

    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function getNome():string{
        return $this->nome;
    }
    public function setFoto($foto):void{
        $this->foto = $foto;
    }

    public function getFoto():string{
        return $this->foto;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function save():bool{
        $conexao = new MySQL();
        $diretorio = "fotos/";
        $nome_arquivo = $this->foto['foto']['name'];
        $info_name = explode(".",$nome_arquivo);
        $extensao = end($info_name);
        $this->foto = $diretorio.uniqid().".".$extensao;
        move_uploaded_file($_FILES["foto"]["tmp_name"],$this->foto);
        if(isset($this->id)){
            $sql = "UPDATE pessoas SET nome = '{$this->nome}' ,email = '{$this->email}' WHERE id = {$this->id}";
        }else{
            $sql = "INSERT INTO pessoas (nome,email,idUsuario,foto) VALUES ('{$this->nome}','{$this->email}',{$this->idUsuario}, '{$this->foto}')";
        }
        return $conexao->executa($sql);
        
    }
    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM pessoas WHERE id = {$this->id}";
        unlink($this->foto);
        return $conexao->executa($sql);
    }

    public static function find($id):Pessoa{
        $conexao = new MySQL();
        $sql = "SELECT * FROM pessoas WHERE id = {$id}";
        $resultado = $conexao->consulta($sql);
        $p = new Pessoa($resultado[0]['nome'],$resultado[0]['email']);
        $p->setFoto($resultado[0]['foto']);
        $p->setIdUsuario($resultado[0]['idUsuario']);
        $p->setId($resultado[0]['id']);
        return $p;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM pessoas";
        $resultados = $conexao->consulta($sql);
        $pessoas = array();
        foreach($resultados as $resultado){
            $p = new Pessoa($resultado['nome'],$resultado['email']);
            $p->setId($resultado['id']);
            $p->setFoto($resultado['foto']);
            $p->setIdUsuario($resultado['idUsuario']);
            $pessoas[] = $p;
        }
        return $pessoas;
    }

    public static function findallByUsuario($idUsuario):array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM pessoas WHERE idUsuario = {$idUsuario}";
        $resultados = $conexao->consulta($sql);
        $pessoas = array();
        foreach($resultados as $resultado){
            $p = new Pessoa($resultado['nome'],$resultado['email']);
            $p->setId($resultado['id']);
            $p->setFoto($resultado['foto']);
            $p->setIdUsuario($resultado['idUsuario']);
            $pessoas[] = $p;
        }
        return $pessoas;
    }
    
}

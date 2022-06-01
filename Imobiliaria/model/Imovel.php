<?php

require_once 'Banco.php';
require_once '../Conexao.php';

class Imovel extends Banco {

    private $id;
    private $login;
    private $senha;
    private $permissao;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->login = $login;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo= $tipo;
    }

    public function save(){
    
        $result = false;
    
        $conexao = new Conexao();
        $query = "insert into usuario (id, descricao, foto, valor, tipo) values (null,:descricao,:valor,:tipo)";
    
        if($conn = $conexao->getConection()){
    
            $stmt = $conn->prepare($query);
    
        }
        return $result;
    }
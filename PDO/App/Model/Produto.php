<?php

namespace App\Model;

class Produto {
    private $id, $produto, $descricao;
    public function setProduto($produto){
        $this->produto = $produto;
    }
    public function getProduto(){
        return $this->produto;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
}
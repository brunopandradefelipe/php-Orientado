<?php

namespace App\Model;

class ProdutoDao {
    public function create(Produto $produto) {
        $sql = "INSERT INTO produtos (nome, descricao) VALUE (?,?)";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $produto->getProduto());
        $stmt->bindValue(2, $produto->getDescricao());
        $stmt->execute();
    }
    public function read() {

    }
    public function update(Produto $produto) {

    }
    public function delete($id) {

    }
}
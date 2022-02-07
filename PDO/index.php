<?php

require_once './App/vendor/autoload.php';

$produto = new \App\Model\Produto;
$produto->setProduto("Smartfone Samsung");
$produto->setDescricao("Celular Inteligente!");

$produtoDAO = new \APP\Model\ProdutoDao;
$produtoDAO->create($produto);
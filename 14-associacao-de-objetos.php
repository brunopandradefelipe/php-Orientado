<?php

class Pedido {
    public $numeroDoPedido;
    public $produto;
    public $cliente;
}

class Cliente {
    public $nome;
    public $idade;
    public $email;
}

$bruno = new Cliente();
$bruno->nome = "Bruno Pereira de Andrade Felipe";
$bruno->idade = 21;
$bruno->email = "brunopandradefelipe@gmail.com";

$pedido = new Pedido();
$pedido->numeroDoPedido = 100;
$pedido->produto = "Placa-mãe";
$pedido->cliente = $bruno;

$dados = array(
    "pedido_numero" => $pedido->numeroDoPedido,
    "pedido_produto" => $pedido->produto,
    "nome_cliente" => $pedido->cliente->nome,
    "idade_cliente" => $pedido->cliente->idade,
    "email_cliente" => $pedido->cliente->email,
);

print_r($dados);



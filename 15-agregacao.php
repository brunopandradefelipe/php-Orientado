<?php 

class Produto {
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;
    public function adiciona(Produto $produto){
        $this->produtos[] = $produto;
    }
    public function mostrarItens(){
        foreach ($this->produtos as $produto) {
            echo $produto->nome. " ";
            echo $produto->valor. "<br/>";
        }
    }
}

$produto = new Produto("Cachorro quente", "5,00");
$carrinho = new Carrinho();
$carrinho->adiciona($produto);
$produto = new Produto("Pao de queijo", "3,00");
$carrinho->adiciona($produto);
$carrinho->mostrarItens();
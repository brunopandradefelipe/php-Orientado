<?php

class Pessoa {
    public $nome;
    public $idade;
    function __clone()
    {
        echo "Foi criado um clone de Pessoa <br/>";
    }

}

$pessoa = new Pessoa();
$pessoa->nome = "Bruno Pereira de Andrade Felipe";
$pessoa->idade = 21;
$pessoa2 = clone $pessoa;
$pessoa2->idade = 22;

echo $pessoa->idade;
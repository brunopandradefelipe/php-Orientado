<?php
class Pessoa
{
    public $nome;
    public $idade;

    public function Falar()
    {
        echo $this->nome . "e idade de " . $this->idade;
    }
}

$bruno = new Pessoa();
// var_dump($rodrigo);


$bruno->nome = "Bruno Pereira de Andrade Felipe";
$bruno->idade = 21;
$bruno->Falar();

//echo "Meu nome é $bruno->nome, e minha idade é $bruno->idade";

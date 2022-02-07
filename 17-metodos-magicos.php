<?php

class Pessoa {
    private $dados = [];
    public function __set($name, $value)
    {
        $this->dados[$name] = $value; 
    }
    public function __get($name)
    {
        return $this->dados[$name];
    }
    public function __toString()
    {
        return "Não é possivel imprimir um objeto! Tente imprimir um metodo publico!";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Bruno";
$pessoa->idade = 21;
echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa;
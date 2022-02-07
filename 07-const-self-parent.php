<?php


class Pessoa {
    const nome = "Bruno Pereira";
    
    public function exibirNome() {
        echo self::nome;
    }
}

$usuario = new Pessoa();
$usuario->exibirNome();
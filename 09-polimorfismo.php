<?php 

abstract class Animal {
    public $nome;
    public function andar(){
        echo "Animal andou!";
    }
}

class Cachorro extends Animal {
    public function andar(){
        echo "Cachorro andou!";
    }
}

$cao = new Cachorro();
$cao->nome = "Scoby";
$cao->andar();
echo $cao->nome;
<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    abstract protected function Sacar ();
    abstract protected function Depositar();
    abstract protected function saqueLimite($valor);
}

class Itau extends Banco {
    public function Sacar() {
        echo "Sacou!";
    }
    public function Depositar() {
        echo "Depositou!";
    }
    public function saqueLimite($valor){
        if($valor > 100){
            echo "Voce não pode sacar, valores maior que R$100,00";
        }else {
            $this->Sacar();
        }
    }
}
class Bradesco extends Banco {
    public function Sacar() {
        echo "Sacou!";
    }
    public function Depositar() {
        echo "Depositou!";
    }
    public function saqueLimite($valor){
        if($valor > 100){
            echo "Voce não pode sacar, valores maior que R$100,00";
        }else {
            $this->Sacar();
        }
    }
}

$itau = new Itau();
$itau->saqueLimite(100.01);

// $banco = new Banco(); Não é possivel instanciar uma classe abstrata
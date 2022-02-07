<?php


class Carro {
    public function atribuiMarca($marca){
        return "A marca do carro é: ".$marca;
    }
}

class ExibeMarca {
    private $carro;
    private $marca;
    public function exibe($marca) {
        $this->marca = $marca;
        $this->carro = new Carro();
        echo $this->carro->atribuiMarca($this->marca);
    } 
}

$uno = new ExibeMarca();
$uno->exibe("Fiat");
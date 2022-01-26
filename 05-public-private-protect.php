<?php

class Veiculo {
    private $marca;
    private $modelo;
    protected function andar() {
        echo " Andou ";
    }
}

class Moto extends Veiculo {
    public function insereDados($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function mostraDados () {
        echo "Marca ", $this->marca, " Modelo ", $this->modelo;
    }
    public function acaoAndar() {
        $this->andar();
    }    
}


$cb500 = new Moto();
$cb500->insereDados("Honda", "Cb500");
$cb500->mostraDados();
$cb500->acaoAndar();



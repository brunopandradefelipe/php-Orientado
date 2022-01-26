<?php 

class Veiculo {
    public $marca;
    public $modelo;
    public $cor;
    public $ano;
    public function andar() {
        echo "Andou<br/>";
    }
    public function parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo {
   public function limparParabrisa(){
        echo "Limpando parabrisa";
   }
}

class Moto extends Veiculo {
    public function grau () {
        echo "Dando grau!";
    }
}



$cb500 = new Moto();
$cb500->andar();
$corollaCross = new Carro();
$corollaCross->parar();
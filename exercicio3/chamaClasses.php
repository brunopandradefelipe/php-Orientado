<?php

require_once "classes.php";

use Classes\Componentes as teste;

class Computador extends teste{
    private $monitor;
    private $gabinete;
    public function setConfig($array) {
        foreach ($array as $key => $check){
            if($key == "monitor"){
                $this->monitor=$check;
            } elseif ($key == "gabinete"){
                $this->gabinete=$check;
            } elseif ($key == "placamae"){
                $this->placaMae=$check;
            } elseif ($key == "processador"){
                $this->processador=$check;
            } elseif ($key == "memoria"){
                $this->memoria=$check;
            } elseif ($key == "hd"){
                $this->hd=$check;
            } elseif ($key == "fonte"){
                $this->fonte=$check;
            }
        }
    }
    public function getConfig() {
        $array = array("monitor" => $this->monitor, "gabinete" => $this->gabinete, "placamae" => $this->placaMae, "processador" => $this->processador, "memoria" => $this->memoria, "hd" => $this->hd, "fonte" => $this->fonte);
        return $array;
    }
}

$array = array("fonte" => "Corsair 500w", "hd" => "1TB WD", "memoria" => "Kingston DDR4 8GB", "processador" => "i5 9400f", "placamae" => "B360 1151", "gabinete" => "NOX Sigma", "monitor" => "Asus 24 polegadas");
$pc1 = new Computador();
$pc1->setConfig($array);
foreach($pc1->getConfig() as $config){
    echo $config. "<br/>";
}
<?php

namespace prof2;

interface Profissoes {
    public function setSalario($s);
    public function getSalario();
    public function setHorasTrabalhadas($h);
    public function getHorasTrabalhadas();
}

class Carteiro implements Profissoes {
    private $salario;
    private $horas;
    public function setSalario($s)
    {
        echo "Salario setado com sucesso!";
        $this->salario = $s;
    }
    public function getSalario()
    {
        echo "Salario = ".$this->salario;

    }
    public function setHorasTrabalhadas($h){
        echo "Horas setado com sucesso!";
        $this->salario = $h;
    }
    public function getHorasTrabalhadas(){
        echo "Salario = ".$this->horas;
    }
}
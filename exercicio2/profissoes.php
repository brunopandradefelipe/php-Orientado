<?php

namespace prof;

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
        $this->salario = $s;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function setHorasTrabalhadas($h){
        $this->salario = $h;
    }
    public function getHorasTrabalhadas(){
        return $this->horas;
    }
}
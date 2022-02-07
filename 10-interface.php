<?php

interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Carros implements Crud {
    public function create()
    {
        echo "Criado com sucesso";
    }
    public function read()
    {
        echo "Listado com sucesso";
    }
    public function update()
    {
        echo "Atualizado com sucesso";
    }
    public function delete()
    {
        echo "Deletado com sucesso";
    }
}

$bmw = new Carros();
$bmw->create();
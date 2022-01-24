<?php

if (isset($_GET['enviar'])) {
    class Pessoa
    {
        private $nome;
        private $idade;
        private $email;

        public function setNome($valor)
        {
            $this->nome = $valor;
        }
        public function setIdade($valor)
        {
            $this->idade = $valor;
        }
        public function setEmail($valor)
        {
            $this->email = $valor;
        }

        public function getNome($valor)
        {
            $this->nome = $valor;
        }
        public function getIdade($valor)
        {
            $this->idade = $valor;
        }
        public function getEmail($valor)
        {
            $this->email = $valor;
        }
    }
} else {
    echo "Acesso negado!";
}

<?php

use Pessoa as GlobalPessoa;

if (isset($_GET['enviar'])) {
    if (empty($_GET['nome']) || empty($_GET['idade']) || empty($_GET['email'])) {
        echo "<p style='color: red'>Preencha todos os campos!!</p>";
    } else {
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

            public function getNome()
            {
                return $this->nome;
            }
            public function getIdade()
            {
                return $this->idade;
            }
            public function getEmail()
            {
                return $this->email;
            }
        }
        $user = new Pessoa();
        $user->setNome($_GET['nome']);
        $user->setIdade($_GET['idade']);
        $user->setEmail($_GET['email']);
        $nome = $user->getNome();
        $idade = $user->getIdade();
        $email = $user->getEmail();
        echo "Seu nome é: $nome, e sua idade é: $idade, e seu email é: $email";
    }
} else {
    echo "<p style='color: red'>Acesso negado!!</p>";
}

<?php

if(isset($_GET['enviar'])){
    if (empty($_GET['nome']) || empty($_GET['idade']) || empty($_GET['email'])) {
        echo "<p style='color: red'>Preencha todos os campos!!</p>";
    } else {
        
        class Pessoa {
            private $nome;
            private $idade;
            private $email;
            public function __construct($nome, $idade, $email)
            {
                $this->nome = $nome;
                $this->idade = $idade;
                $this->email = $email;
            }
            public function mostrarDados() {
                echo $this->nome."<br/>".$this->idade."<br/>".$this->email;
            }

        }
        $user = new Pessoa($_GET['nome'], $_GET['idade'], $_GET['email']);
        $user->mostrarDados();
    }
}else {
    echo "<p style='color: red'>Acesso negado!!</p>";
}
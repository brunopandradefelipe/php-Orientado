<?php

class Login
{
    private $email;
    private  $senha;
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($e)
    {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($e)
    {
        $senha = filter_var($e, FILTER_SANITIZE_STRING);
        $this->senha = $senha;
    }
    public function Logar()
    {
        if ($this->email == "teste@teste.com" and $this->senha == "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Dados invalidos!";
        }
    }
}


$user = new Login("teste@teste.com", "123456", "Bruno Pereira");
$user->Logar();

// Acessando os dados pela função pegar/get

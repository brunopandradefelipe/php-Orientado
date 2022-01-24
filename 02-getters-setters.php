<?php

class Login
{
    private $email;
    private $senha;
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

$email = "teste@teste.com";
$senha = "123456";
$user = new Login();
$user->setEmail($email);
$user->setSenha($senha);
$user->Logar();

// Acessando os dados pela função pegar/get


echo "<br/>" . $user->getEmail() . "<br/>";
echo $user->getSenha() . "<br/>";

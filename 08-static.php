<?php

class Login {
    public static $user;
    public static function verificaLogin(){
        echo  self::$user." logado com sucesso!</br>";
    }
    public function sairSistema(){
        echo "<br/>O usuario ".self::$user." saiu do sistema!";
    }
}
Login::$user = "admin";
Login::verificaLogin();
echo Login::$user;
$logger = new Login();
$logger->sairSistema();
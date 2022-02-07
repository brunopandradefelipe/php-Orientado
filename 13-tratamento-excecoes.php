<?php

class Cliente {
    function validaEmail ($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo $email;
        }else {
            throw new Exception("<p style='color: red; font-size: 30px;'>Email invalido!!</p>");
        }
    }
}

$bruno = new Cliente();
try {
    $bruno->validaEmail("brunopandradefelipe!!@");
}catch(Exception $e){
    echo $e->getMessage();
}
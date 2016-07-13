<?php

header("Content-Type: text/html; charset=utf-8");

class Validacoes {
    public static function validarEmail($email){
        //verifica se o email esta válido ou inválido
        return preg_match("^[a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$^", $email);
    }
}

//nesse momento estamos passando o valor do email
if (Validacoes::validarEmail("pedro@site.com.br"))
{
    echo 'E-mail válido.';
}
 else {
    echo 'E-mail inválido.';
}
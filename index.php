<?php

//Mostra para o navegador qual o charset da nossa página
header("Content-Type: text/html; charset=utf-8");

//Método __autoload()
function __autoload($classe)
{
    require_once ($classe . '.php');
}

//Cria o objeto Pessoa
$pessoa = new Pessoa();

//Cria o objeto Funcionário
$funcionario = new Funcionario();


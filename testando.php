<?php

header("Content-Type: text/html; charset=utf-8");
//===========        Alguns Testes            =================

$dados = ["Pedro","24"];

echo "Nome: " . $dados[0] . "<br>";
echo "Idade: " . $dados[1] . "<br>";

echo '<hr>';

//Array associativo que usa o =>
$dados2 = [
    "nome" => "Pedro",
    "idade" => "24"
];

echo "Nome: " . $dados2["nome"] . "<br>";
echo "Idade: " . $dados2["idade"];

echo '<hr>';

$dados3 = [
    "nome" => "Pedro",
    "idade" => "24"
];

foreach ($dados3 as $chave => $valor){
    echo $chave . ":" . $valor . "<br>";
}
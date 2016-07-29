<?php

$cursos = [
    "d" => "Python",
    "a" => "Java",
    "b" => "Ruby",
    "c" => "Android",
];

//Ordena o array
ksort($cursos);

foreach ($cursos as $chave => $valor) {
    printf("%s = %s <br>", $chave, $valor);
}

echo"<hr>";

//Tag para formatação do texto
echo "<pre>";
$nomes = ["Pedro","Rosa","Elizabeth","Andreza"];

print_r($nomes);

array_shift($nomes);

print_r($nomes);

echo"<hr>";

//Faz a verificação se realmente é um array
$data = "Pedro Amaral";

var_dump(is_array($data));

$data = ["Pedro Amaral"];

var_dump(is_array($data));
echo "</pre>";
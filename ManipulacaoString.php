<?php

$data["controladora"] = "contatos";
$data["metodo"] = "exibir";
$data["argumento"] = "all";

//Implode coloca todas as string em uma linha separando com /
$url = implode("/", $data);
echo $url;

echo "<hr>";

$data1 = "contatos/exibir/all";

$url1 = explode("/", $data1);
print_r($url1);
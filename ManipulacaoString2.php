<?php

header("Content-Type: text/html; charset=utf-8");

//Texto
$texto = "pedro paulo silva amaral - programador junior";

//Funções
//Somente a primeira palavra que tem a letra maiuscula
printf("ucfirst: %s <br>", ucfirst($texto));

//Cada palavra tem letra em maiuscula
printf("ucwords: %s <br>", ucwords($texto));

//Toda frase em letra minuscula
printf("strtlower: %s <br>", strtolower($texto));

//Toda frase em letra maiuscula
printf("strtoupper: %s <br>", strtoupper($texto));


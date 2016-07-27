<?php

header("Content-Type: text/html; charset=utf-8");

//Array multidimensional
$cidades = [
    "MG" =>
            [
                "Betim" =>
                    [
                        "População" => 383.570,
                        "PIB" => 58.938
                    ],
                "Contagem" =>
                    [
                        "População" => 608.714,
                        "PIB" => 24.70
                    ]
            ],
    "SP" =>
            [
                "São Bernardo do Campo" =>
                    [
                        "População" => 770.253,
                        "PIB" => 37.267
                    ],
                "Santos" =>
                    [
                        "População" => 419.509,
                        "PIB" => 12.545
                    ]
            ],
];

foreach( $cidades as $estado => $cidade )
{
    printf("<b>Estado:</b> %s<br><br>", $estado);

    foreach( $cidade as $nome => $dados )
    {
        printf("<b>Cidade:</b> %s<br>", $nome);

        foreach( $dados as $chave => $valor )
        {
            printf("%s: %s<br>", $chave, $valor);
        }

        echo "<br>";
    }

    echo "<hr>";
}
<?php

// Charset
header("Content-Type: text/html; charset=utf-8");

// Função openFile()
function openFile( $arquivo = null )
{
    if( !$arquivo )
    {
        throw new Exception("O nome do arquivo não foi especificado.");
    }

    if( !file_exists($arquivo) )
    {
        throw new Exception("Arquivo não encontrado.");
    }

    if( !$data = file_get_contents($arquivo) )
    {
        throw new Exception("Não foi possível ler o arquivo.");
    }

    // Retorna o conteúdo do arquivo
    return $data;
}

// Tenta abrir o arquivo
try
{
    $arquivo = openFile("data.log");
    echo $arquivo;
}
catch( Exception $exc )
{
    // Em caso de erro, imprime suas descrições.
    echo $exc->getFile() . " - " . $exc->getLine() . " # " . $exc->getMessage();
}
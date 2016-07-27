<?php

<<<<<<< HEAD
class Teste 
{
    protected $nome;
    
    public function __construct($data) 
    {
        $this->nome = $data;
    }
    //Encapsulamento - Segurança
    public function getNome()
    {
        return $this->nome;  
    }
    
}

$a = new Teste("TreinaWeb");
echo $a->getNome();

//Quebra de linha HTML
echo "<br>";
echo "<br>";

class a {

    function __construct() 
    {
     echo "Classe A Iniciada.";   
    }
    
}

//Herança
class b extends a
{
    function __construct() 
    {
        parent::__construct();
        echo "Classe B Iniciada";
    }
}

//Instanciando B
$b = new b();
=======
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

>>>>>>> 44ba0afcfab50c84667fefa5e409a8b061b302dd

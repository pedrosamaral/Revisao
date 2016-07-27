<?php

class a
{
    private $atributo1;
    protected $atributo2;
    public $atributo3;

    public function setAtributo1($val)
    {
        $this->atributo1 = $val;
    }

    public function getAtributo1()
    {
        return $this->atributo1;
    }
}

class b extends a
{
    //
}

//$b = new b();
//$b->setAtributo1("TreinaWeb");//Nesse momento estou passando um valor para a variavel atributo1
//echo $b->getAtributo1();//Nesse momento estou requisitando o valor!
//echo "<br>";
$b = new b();
$b->atributo3 = "TreinaWeb Cursos";
echo $b->atributo3;


<?php

class Common{

    //Método estática
    public static function somar($a, $b)
{
    return $a + $b;
}
}
echo call_user_func(['Common','somar'], 25, 25);
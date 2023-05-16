<?php

class Calculadora{

    public $numero1, $numero2, $numero3;

    public function __construct($num1, $num2, $num3){
        
        $this->numero1 = $num1;
        $this->numero2 = $num2;
        $this->numero3 = $num3;

    }
    function sumar(){
        return  $this->numero1 + $this->numero2 + $this->numero2;

    }

}

$resultado = new Calculadora(10,10,10);
echo $resultado->sumar();

?>
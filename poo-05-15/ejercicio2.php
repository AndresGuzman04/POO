<?php

abstract class Bascula{

    public $precioLibraCarne;
    public $precioLibraEmbutidos;
    public $precioLibraPollo;

    public function pesarCarne($precioLibraCarne){
        
    }
    public function pesarEmbutido($precioLibraEmbutidos){

    }
    public function pesarPollo($precioLibraPollo){

    }

}

class pesaje extends Bascula{
    public $peso, $codigo;
    public $codigoToledo = 101010, $danny = 202020;
    public $indio = 303030, $selloOro = 404040;
    public $res = 505050, $cerdo = 606060;

    public function __construct($peso, $codigo){
        $this->peso = $peso;
        $this->codigo = $codigo;
    }
    function pesarCarne($precioLibraCarne){
        
        return $cantidad = $this->peso * $this->precioLibraCarne;
    }
    function pesarEmbutido($precioLibraEmbutidos){
        $this->precioLibraEmbutidos = $precioLibraEmbutidos;
        return $cantidad = $this->peso * $this->precioLibraEmbutidos;
    }
    function pesarPollo($precioLibraPollo){
        $this->precioLibraPollo = $precioLibraPollo;
        return $cantidad = $this->peso * $this->precioLibraPollo;
    }

    function Caja(){
        switch ($this->codigo) {
            case '101010':
                    return $this->pesarEmbutido(1.40);
                break;
            case '202020':
                return $this->pesarEmbutido(1.50);
                break;
            case '303030':
                return $this->pesarPollo(2.40);
                break;
            case '404040':
                return $this->pesarPollo(2.30);
                break;
            case '505050':
                return $this->pesarCarne(4.75);
                break;
            case '606060':
                return $this->pesarCarne(2.58);
                break;

            default:
                return "error";
                break;
        }
    }

}


$embutidos = new pesaje(10, 202020);
echo $embutidos->Caja();

?>
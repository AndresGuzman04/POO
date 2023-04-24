<?php

class Producto{
    public $nombre;
    public $precio;
    public $pago;
    public function __construct($nombre, $precio, $pago){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->pago = $pago;
    }

    public function calcularCambio(){
        $cambio = $this->precio - $this->pago;
        echo "El cambio es:".$cambio;

    }

    public function mostrarInfo(){

        echo "Producto: ".$this->nombre."<br>";
        echo "Precio: ".$this->precio."<br>";

    }

    
}



?>
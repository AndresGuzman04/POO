<?php

    class Conversion{
        public $opcion = 0;
        public $grados = 0;
        public $resultado = 0;

        public function __construct($opcion, $grados){
            $this->opcion = $opcion;
            $this->grados = $grados;
        }

        public function celsiusToFahrenheit(){
            $this->resultado = ($this->grados * 9/5) + 32; 
            return $this->resultado;
        }

        public function fahrenheitToCelsius(){
            $this->resultado = ($this->grados - 32) * 5/9;
            return $this->resultado;
        }

        public function calcular(){
            if ($this->opcion == 0) {
                return $this->celsiusToFahrenheit();
            }elseif($this->opcion == 1){
                return $this->fahrenheitToCelsius();
            }else{
                return "Error...";
            }
        }
    }

?>
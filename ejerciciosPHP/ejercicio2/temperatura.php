<?php

    class Temperatura{

        public $grados = 0;

        public function __construct($grados){
            $this->grados = $grados;
        }

        public function calcular(){
            if ($this->grados <= 0) {
                echo 
                '<div class="alert alert-primary" role="alert">
                Temperatura máximamente FRIA
                </div>'
                ;
            }elseif($this->grados <= 30){
                echo  
                '<div class="alert alert-info" role="alert">
                    Temperatura estable
                </div>';
            }elseif($this->grados >= 31){
                echo 
                '<div class="alert alert-warning" role="alert">
                    Temperatura máximamente CALIENTE
                </div>';
            }else{

            }
        }
    }

?>
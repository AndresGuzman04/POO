<?php

    class Arma{
        public $nombre;
        public $balas;
        public function __construct($nombre, $balas){
            $this->nombre = $nombre;
            $this->balas = $balas;
        }

        public function recargar(){
            if ($balas == 0) {
                $balas =+8;
            }else{
                echo '
                <script>
                alert("Para recargar debe estar vacio el cargador");
                </script>
            ';
            }
        }

        public function disparar(){
            if ($balas > 0) {
                $balas =- 1;
            }
        }
    }

    class AK47 extends Arma{
        public function __construct($nombre, $balas){
            parent:: __construct($nombre, $balas);
        }
        
    }
    class M16 extends Arma{
        public function __construct($nombre, $balas){
            parent:: __construct($nombre, $balas);
        }
        
    }
    class M4 extends Arma{
        public function __construct($nombre, $balas){
            parent:: __construct($nombre, $balas);
        }
        
    }
?>
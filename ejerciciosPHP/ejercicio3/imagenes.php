<?php

    class Imagen{
        public $num;

        public function __construct($num){
            $this->num = $num;
        }

        public function mostrarImg(){
            $j = 0;
            for ($i=1 ; $i <= $this->num ; $i++ ) { 
                    $j ++;
                     echo 
                        '
                        <div class="col-4 p-3">
                            <img src="img/img'.$j.'.jpg" class="img-fluid" alt="...">
                        </div>
                        '; 
                    if ($j == 15) {
                        $j = 0;
                    }

                    
                }

            }
        }


?>
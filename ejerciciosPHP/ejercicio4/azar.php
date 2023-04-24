<?php

class Juego{
    public $numero;
    public $precio;

    public function __construct($numero, $precio){
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function Girar(){
        $numeroPremio=rand(1,100);
        if ($this->numero == $numeroPremio) {
            switch ($this->precio) {
                    case '1':
                        echo "Has ganado $70";
                    break;
                    case '2':
                        echo "Has ganado $140";
                    break;
                    case '3':
                        echo "Has ganado $210";
                    break;
                    case '4':
                        echo "Has ganado $280";
                    break;
                    case '5':
                        echo "Has ganado $350";
                    break;
                    case '6':
                        echo "Has ganado $420";
                    break;
                    case '7':
                        echo "Has ganado $490";
                    break;
                    case '8':
                        echo "Has ganado $560";
                    break;
                    case '9':
                        echo "Has ganado $530";
                    break;
                    case '10':
                        echo "Has ganado $700";
                    break;                
                default:
                        echo "Error";
                    break;
            }
        }else {
            echo "Numero Ganador: ".$numeroPremio."<br>";
            echo "Numero elejido:".$this->numero."<br>";
            echo "Gracias por participar,suerte para la próxima!";
        }
    }

}


?>

<?php

    class Calculadora{
        public $num1;
        public $num2;
        public $opcion;
        public $resultado;

        public function __construct($num1, $num2, $opcion){
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->opcion = $opcion;
        }

        public function Calcular(){

            switch ($this->opcion) {
                case '0':
                    $this->resultado = $this->num1 + $this->num2;
                    echo $this->num1.' + '.$this->num2.' = '.$this->resultado;
                    break;
                case '1':
                    $this->resultado = $this->num1 - $this->num2;
                    echo $this->num1." - ".$this->num2." = ".$this->resultado;
                    break;
                case '2':
                    $this->resultado = $this->num1 / $this->num2;
                    echo $this->num1." / ".$this->num2." = ".$this->resultado;
                    break;
                case '3':
                    $this->resultado = $this->num1 * $this->num2;
                    echo $this->num1." * ".$this->num2." = ".$this->resultado;
                    break;
                
                default:
                    echo "Error, selecione una operación.";
                    break;
            }
        }

    }

    $operacion1 = new Calculadora($_POST['num1'],$_POST['num2'],$_POST['opcion'])

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light ">

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.html">Principal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="operaciones.php">Resultado <span class="sr-only">(current)</span></a>
                </li>
            </form>
        </div>
    </nav>

    <div class="jumbotron">
        
        <div class="container"style="margin: auto; width: 25%; "><br>
            
            <h1 class="display-4">Resultado:</h1>
            <p class="lead"><?php
                    $operacion1->Calcular();
                ?></p>
        
            <div class="form-group row">
                <div class="col-sm-1-12">
                    <a href="../index.html" class="btn btn-primary" >Volver</a>
                </div>            
            </div>
        </div>

    </div>
    

</body>
</html>
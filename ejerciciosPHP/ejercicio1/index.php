<?php

    require_once'Conversion.php';

    if (isset($_POST['opcion']) && isset($_POST['grados'])) {
        $operacion = new Conversion($_POST['opcion'], $_POST['grados']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Conversion</title>
</head>
<body>

<div class="container"style="margin: auto; width: 25%; "><br>

    <form method="POST"  action="index.php" >

        <div class="form-group row">
            <div class="col-sm-1-12">
                <input type="number" class="form-control" name="grados" placeholder="Grados">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1-12">
                <div class="form-group">
                    <select class="custom-select" name="opcion" >
                        <option selected value="3">Selecione...</option>
                        <option value="0">Celsius a Fahrenheit</option>
                        <option value="1">Fahrenheit a Celsius</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-1-12">
                <input type="submit" class="btn btn-primary" Value="Calcular" ><br>
                <label >
                    <script>
                        alert("<?php echo "Resultado: ".$operacion->calcular(); ?>");
                    </script>
                </label>
            </div>
        </div>
        
    </form>

</div>
    
</body>
</html>

<?php

require_once'producto.php';

if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['pago'])) {
    $calcular = new Producto($_POST['nombre'], $_POST['precio'], $_POST['pago']);
    echo $calcular->mostrarInfo();
    echo $calcular->calcularCambio();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambio</title>
</head>
<body>

<div class="container">

    <form action="index.php" method="POST">

        <input type="text" name="nombre" placeholder="Producto"><br>
        <input type="number" name="precio" max="20" min="0" placeholder="Precio"><br>
        <input type="number" name="pago" max="20" min="0" placeholder="Pago"><br>
        
        <input type="submit" value="Calcular">
        

    </form>

</div>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Imagenes</title>
</head>
<body>

<div class="container"style="margin: auto; width: 25%; "><br>

    <form method="POST"  action="index.php">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Digite el numero de imagenes:</label>
            <input type="number" class="form-control" name="num">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

</div>
<div class="container text-center">
    <div class="row">
    <?php

    require_once'imagenes.php';

    if (isset($_POST['num'])) {
        $imagenes = new Imagen($_POST['num']);
        $imagenes->mostrarImg();
    }

    ?>
    </div>
</div>

</body>
</html>
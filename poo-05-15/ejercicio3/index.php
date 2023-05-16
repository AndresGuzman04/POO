<?php
    require_once 'sesion.php';

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $usuario = new Usuario($_POST['username'], $_POST['password']);
        $session = new Session($usuario);
        $session->iniciarSesion();
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    <div class="row  align-items-center justify-content-center vh-100">
        <form action="index.php" method="POST" class="col-sm-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" class="form-control" name="username" required  placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="password" required placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary ">Iniciar Sesion</button>
        </form>
    </div>

    </div>

</body>
</html>
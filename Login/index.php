<?php

session_start();
include_once 'bd.php';
include_once 'login.php';

$host="localhost";
$dbname="practica_crud";
$usuario="root";
$contrasena="";
$conexion = new ConexionPDO($host, $dbname, $usuario, $contrasena);
$conexion->conectar();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = MD5($_POST['pwd']);

    $login = new Login($conexion);

    if ($login->login($usuario, $password)) {
        $_SESSION['usuario']=$usuario;
        header("Location: dash.php");
        exit();
    }else{
      echo
            '
                <script>
                alert("Error al iniciar sesion");
                </script>
            ';
    }

}

$conexion->desconectar();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="m-0 vh-100 row justify-content-center align-items-center ">

                <div class="card col-3">
                    <div class="card-header">
                        Login
                    </div>
                        <div class="card-body">
                      
                            <form action="" method="POST" >

                            <div class = "form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="user" placeholder="Escribe tu Usuario">
                            </div>

                            <div class="form-group">
                            <label>Contraseña:</label>
                            <input type="password" class="form-control" name="pwd" placeholder="Escribe tu Contraseña">
                            </div>

                            <button type="submit" class="btn btn-primary">Ingresar</button>

                            </form>
                            
                            
                        </div>
                </div>

            </div>
            
        </div>
    </div>

  </body>
</html>
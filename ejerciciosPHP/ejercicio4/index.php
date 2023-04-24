
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Juego</title>
</head>
<body>

<div class="container"style="margin: auto; width: 25%; "><br>

    <form method="POST"  action="index.php">

        <h1 class="display-4">Bienvenidos</h1>
        <p class="lead">Juegos de azar</p>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ecriba un numero entre 1 - 100:</label>
            <input type="number" min="1" max="100" required class="form-control" name="num">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Elija el precio del numero</label>
                <select required class="custom-select" name="precio" >
                    <option value="1">$1 = $70</option>
                    <option value="2">$2 = $140</option>
                    <option value="3">$3 = $210</option>
                    <option value="4">$4 = $280</option>
                    <option value="5">$5 = $350</option>
                    <option value="6">$6 = $420</option>
                    <option value="7">$7 = $490</option>
                    <option value="8">$8 = $560</option>
                    <option value="9">$9 = $530</option>
                    <option value="10">$10 = $700</option>
                </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button><br><br>
            <div class="alert alert-primary" role="alert">
                <?php

                    require_once'azar.php';

                    if (isset($_POST['num']) && isset($_POST['precio'])) {
                        $jogo = new Juego($_POST['num'], $_POST['precio']);
                        $jogo->Girar();
                    }

                ?>
            </div>

        

    </form>

</div>


</body>
</html>
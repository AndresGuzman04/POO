<?php

    require_once'armas.php';

        $ak47 = new AK47("AK47",1);
        $m16 = new M16("M16",0);
        $m4 = new M4("M4",0);
        


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Armas</title>
</head>
<body>

<div class="container"style="margin: auto; width: 25%; "><br>

<div class="container text-center">
    <div class="row">
        <div class="col-4 p-3">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">AK47</h5>
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: <?php echo $ak47->balas * 12.5; ?>%"><?php echo $ak47->balas; ?></div>
                    </div>
                    <a href="#" class="btn btn-primary">Disparar</a>
                    <a href="#" class="btn btn-primary">Recargar</a>
                    
                </div>
            </div>
        </div>
        <div class="col-4 p-3">
            <img src="img/img'.$j.'.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-4 p-3">
            <img src="img/img'.$j.'.jpg" class="img-fluid" alt="...">
        </div>
    </div>

</div>
    
</body>
</html>
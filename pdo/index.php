<?php

include_once'conexion.php';

$conectar = new Conexion($host, $db, $user, $password);
$conectar->conectar();

?>
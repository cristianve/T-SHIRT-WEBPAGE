<?php

$servidor = "localhost";
$usuario = "tdiw-b1";
$password = "zeepoozi";
$bd = "tdiw-b1";


$conexion = new mysqli($servidor, $usuario, $password, $bd);

$conexion->set_charset("utf8");

if($conexion->connect_error){
    die("Connection failed: " . $conexion->connect_error);
}

?>

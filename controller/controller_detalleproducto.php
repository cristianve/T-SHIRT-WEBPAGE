<?php

    include_once (__DIR__."/../model/model_bd.php");
    include_once (__DIR__."/../model/model_productos.php");

    $producto = getDetalleProducto($conexion, $idProducto);

    include_once (__DIR__."/../view/view_detalleProducto.php");

    $conexion->close();
?>
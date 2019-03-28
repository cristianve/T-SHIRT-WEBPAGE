<?php

    include (__DIR__."/../model/model_bd.php");
    include (__DIR__."/../model/model_productos.php");

    $productos = getProductos($conexion, $categoria);

    include (__DIR__."/../view/view_productos.php");

    $conexion->close();
?>
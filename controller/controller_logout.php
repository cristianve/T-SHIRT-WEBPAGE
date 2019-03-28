<?php

    unset($_SESSION['admin']);
    unset($_SESSION['carrito']);
    unset($_SESSION['totalPrecio']);
    unset($_SESSION['totalProductos']);

    session_destroy();

    include (__DIR__."/../model/model_bd.php");
    include (__DIR__."/../model/model_categorias.php");

    $categorias = getCategorias($conexion);

    include(__DIR__ . "/../view/view_header.php");
    include(__DIR__ . "/../view/view_main.php");
    include(__DIR__ . "/../view/view_footer.php");

    $conexion->close();

?>
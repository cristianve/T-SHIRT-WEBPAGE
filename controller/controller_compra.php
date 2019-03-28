<?php

    include_once (__DIR__ . "/../model/model_bd.php");
    include_once (__DIR__ . "/../model/model_compra.php");
    include_once (__DIR__ . "/../model/model_usuarios.php");
    include_once (__DIR__ . "/../model/model_categorias.php");

    $categorias = getCategorias($conexion);

    switch ($estado) {
        case 0:
            $userID = getIDUsuarioByEmail($conexion, $_SESSION["username"]);

            $hora = date("h:i:s");
            $fecha = date("d/m/Y");

            anadirFactura($conexion, $userID, $hora, $fecha, $_SESSION['totalPrecio']);

            $idFact = getIDUltimaFactura($conexion);

            foreach ($_SESSION['carrito'] as $prod => $cant) {
                anadirProductoFactura($conexion, $idFact, $prod, $cant);
            }


            include_once(__DIR__ . "/../view/view_compra.php");

            unset($_SESSION['carrito']);
            unset($_SESSION['totalPrecio']);
            unset($_SESSION['totalProductos']);

            break;


        case 1:
            unset($_SESSION['carrito']);
            unset($_SESSION['totalPrecio']);
            unset($_SESSION['totalProductos']);

            include_once(__DIR__ . "/../view/view_header.php");
            include_once(__DIR__ . "/../view/view_carrito.php");
            include_once(__DIR__ . "/../view/view_footer.php");

            break;
    }

    $conexion->close();



?>
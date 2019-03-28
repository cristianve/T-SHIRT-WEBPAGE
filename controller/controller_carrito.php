<?php

    include_once (__DIR__ . "/../model/model_bd.php");
    include_once (__DIR__ . "/../model/model_categorias.php");
    include_once (__DIR__ . "/../model/model_productos.php");

    $categorias = getCategorias($conexion);
    $total = 0;

    if (isset($idProducto)){
        $p = getProductoCarrito($conexion, $idProducto);
        $t = $p['Precio'];
    }

    if(isset($_SESSION['loggedin'])){
        switch ($estado){
            case 0:
                include_once (__DIR__ . "/../view/view_header.php");
                include_once (__DIR__ . "/../view/view_carrito.php");
                include_once (__DIR__ . "/../view/view_footer.php");
                break;


            default:

                if (isset($_SESSION['carrito'][$idProducto])){

                    $temp = $_SESSION['carrito'][$idProducto];
                    $_SESSION['carrito'][$idProducto] = $cantidad + $temp;
                    $_SESSION['totalProductos'] +=  $cantidad;
                    $_SESSION['totalPrecio'] += $t * $cantidad;


                }else{

                    $_SESSION['carrito'][$idProducto] = $cantidad;
                    $_SESSION['totalProductos'] +=  $cantidad;
                    $_SESSION['totalPrecio'] += $t * $cantidad;

                }
                break;
        }
    }else{
        header('Location: http://deic-dc0.uab.cat/~tdiw-b1/index.php?accion=login&estado=0');
    }




    $conexion->close();
?>
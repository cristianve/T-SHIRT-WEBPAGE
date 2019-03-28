<?php

    session_start();

    $accion = $_GET['accion'];
    $categoria = $_GET['categoria'];
    $idProducto = $_GET['id'];
    $estado = $_GET['estado'];
    $admin = $_GET['admin'];
    $cantidad = $_GET['cantidad'];

    switch ($accion) {
        case 'registro':
            include_once (__DIR__."/controller/controller_registro.php");
            break;

        case 'login':
            include_once (__DIR__."/controller/controller_login.php");

            break;

        case 'productos':
            include_once (__DIR__."/controller/controller_productos.php");
            break;

        case 'detalleproducto':
            include_once (__DIR__."/controller/controller_detalleproducto.php");
            break;

        case 'logout':
            include_once (__DIR__."/controller/controller_logout.php");
            break;

        case 'administracion':
            include_once(__DIR__ . "/controller/controller_administracion.php");
            break;

        case 'contacta':
            include_once (__DIR__ . "/controller/controller_contacta.php");
            break;

        case 'carrito':
            include_once (__DIR__ . "/controller/controller_carrito.php");
            break;

        case 'compra':
            include_once (__DIR__ . "/controller/controller_compra.php");
            break;

        default:
          include (__DIR__."/controller/controller_main.php");
          break;
  }
?>

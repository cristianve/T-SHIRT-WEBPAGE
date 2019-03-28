<?php

    include_once (__DIR__."/../model/model_bd.php");
    include_once (__DIR__."/../model/model_categorias.php");

    $categorias = getCategorias($conexion);

    include_once (__DIR__."/../view/view_header.php");
    include_once (__DIR__."/../view/view_contacta.php");
    include_once (__DIR__."/../view/view_footer.php");

    $conexion->close();
?>
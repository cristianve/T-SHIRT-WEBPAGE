<?php

    include_once (__DIR__."/../model/model_bd.php");
    include_once (__DIR__."/../model/model_categorias.php");

    $categorias = getCategorias($conexion);

    switch ($estado) {

        case '0':
            include(__DIR__ . "/../view/view_header.php");
            include(__DIR__ . "/../view/view_login.php");
            include(__DIR__ . "/../view/view_footer.php");
            break;

        case '1':
            include_once (__DIR__ . "/../model/model_usuarios.php");

            $email = $_POST['email'];
            $password = $_POST['password'];

           $resultado = comprobarUsuario($conexion, $email, $password);

            if ($resultado){
                //header('Location: http://deic-dc0.uab.cat/~tdiw-b1/');
                include_once(__DIR__ . "/../view/view_header.php");
                include_once(__DIR__ . "/../view/view_main.php");
                include_once(__DIR__ . "/../view/view_footer.php");
            } else {
                include_once(__DIR__ . "/../view/view_header.php");
                include_once(__DIR__ . "/../view/view_login.php");
                echo '<p style="color: red">Usuario o contraseña incorrectos</p>';
                include_once(__DIR__ . "/../view/view_footer.php");
            }
            break;
    }

    $conexion->close();
?>
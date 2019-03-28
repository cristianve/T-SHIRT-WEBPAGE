<?php

    include (__DIR__."/../model/model_bd.php");
    include (__DIR__."/../model/model_categorias.php");

    $categorias = getCategorias($conexion);

    switch ($estado) {

        case '0':
          include (__DIR__."/../view/view_header.php");
          include (__DIR__."/../view/view_registro.php");
          include (__DIR__."/../view/view_footer.php");
          break;

        case '1':
            include (__DIR__."/../model/model_usuarios.php");

            $nombre = htmlentities($_POST['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $email = $_POST['email'];
            $direccion = htmlentities($_POST['direccion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $poblacion = htmlentities($_POST['poblacion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $codigoPostal = htmlentities($_POST['cp'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

            anadirUsuario($conexion, $nombre, $password, $email, $direccion, $poblacion, $codigoPostal);

            include (__DIR__."/../view/view_header.php");
            include (__DIR__."/../view/view_login.php");
            include (__DIR__."/../view/view_footer.php");
            break;
        }





    $conexion->close();

?>

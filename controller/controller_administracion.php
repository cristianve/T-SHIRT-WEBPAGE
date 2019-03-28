<?php

    include_once (__DIR__."/../model/model_bd.php");
    include_once (__DIR__ . "/../model/model_categorias.php");
    include_once (__DIR__ . "/../model/model_administracion.php");

    $categorias = getCategorias($conexion);

    if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){

        switch ($estado){

            case 0:
                include_once (__DIR__ . "/../view/view_header.php");
                include_once (__DIR__ . "/../view/view_administracion.php");
                include_once (__DIR__ . "/../view/view_footer.php");
                break;

            case 1:
                $list = obtenerCompras($conexion);

                include_once (__DIR__ . "/../view/view_header.php");
                include_once (__DIR__ . "/../view/view_listaCompras.php");
                include_once (__DIR__ . "/../view/view_footer.php");

                break;

            case 2:
                $product = obtenerProductos($conexion);

                include_once (__DIR__ . "/../view/view_header.php");
                include_once (__DIR__ . "/../view/view_listaProductos.php");
                include_once (__DIR__ . "/../view/view_footer.php");

                break;

            case 3:

                if ($admin == 1){

                    $nombre = $_POST['nombre'];
                    $precio = $_POST['precio'];
                    $stock = $_POST['stock'];
                    $descripcion = $_POST['descripcion'];
                    $descripcionLarga = $_POST['descripcionLarga'];
                    $nomImagen = $_FILES['imagen']['name'];
                    $idTalla = $_POST['idTalla'];
                    $idCategoria = $_POST['idCategoria'];
                    $actiu = $_POST['actiu'];

                    switch ($idCategoria){
                        case 1:
                            $img1 = "hombre/";
                            $img2 = "http://deic-dc0.uab.cat/~tdiw-b1/resources/img/hombre/" . $nomImagen;
                            break;
                        case 2:
                            $img1 = "mujer/";
                            $img2 = "http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/" . $nomImagen;
                            break;
                        case 3:
                            $img1 = "nino/";
                            $img2 = "http://deic-dc0.uab.cat/~tdiw-b1/resources/img/nino/" . $nomImagen;
                            break;
                        case 4:
                            $img1 = "padres/";
                            $img2 = "http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/" . $nomImagen;
                            break;
                    }

                    if ($_FILES['imagen']["error"] > 0){
                        echo "Error: " . $_FILES['imagen']['error'] . "<br>";
                    }else {
                        move_uploaded_file($_FILES['imagen']['tmp_name'], "/moixero-home/tdiw/tdiw-b1/public_html/resources/img/" . $img1 . $_FILES['imagen']['name']);
                    }


                    añadirProducto($conexion, $nombre, $precio, $stock, $descripcion, $descripcionLarga, $img2, $idTalla, $idCategoria, $actiu);


                    include_once (__DIR__ . "/../view/view_header.php");
                    include_once (__DIR__ . "/../view/view_administracion.php");
                    include_once (__DIR__ . "/../view/view_footer.php");

                } else {

                    include_once (__DIR__ . "/../view/view_header.php");
                    include_once (__DIR__ . "/../view/view_añadirProducto.php");
                    include_once (__DIR__ . "/../view/view_footer.php");
                }
                break;
        }

    }else{
        header('Location: http://deic-dc0.uab.cat/~tdiw-b1/index.php');
    }



    $conexion->close();


?>
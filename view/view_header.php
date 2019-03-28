<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset=utf-8"/>
    <title>T-SHITS - Tienda Online</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://deic-dc0.uab.cat/~tdiw-b1/resources/css/style.css">
    <script type="text/javascript" src="http://deic-dc0.uab.cat/~tdiw-b1/resources/js/js_productos.js"></script>
    <script type="text/javascript" src="http://deic-dc0.uab.cat/~tdiw-b1/resources/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="http://deic-dc0.uab.cat/~tdiw-b1/resources/js/slider.js"></script>
</head>
<body>
    <div class="web">
    <header>
        <div class="logo">
          <a href="index.php"><img src="resources/img/logo.png"  alt="logo"/></a>
        </div>

        <div class="carrito">
            <a href="index.php?accion=carrito&estado=0"><img src="resources/img/cesta.png" alt="cesta" style="float: right"/></a>
            <table id="tablaCarrito">
                <tr>
                    <td>Productos: </td>
                    <td id="tdProductos"><?php echo $_SESSION['totalProductos'] ?></td>
                </tr>
                <tr>
                    <td>Total: </td>
                    <td id="tdTotal"><?php echo $_SESSION['totalPrecio'] ?>€</td>
                </tr>
            </table>

        </div>

        <div class="login">
                <div id="micuenta">
                    <a href="#"><img src="resources/img/cuenta.png" alt="carrito" class="mi_perfil"/></a>
                <?php
                    if (isset($_SESSION['admin']) && $_SESSION['admin']==false){
                        echo '<ul class="mi_perfil_categorias">';
                        echo '<li><a href="#">Mi Cuenta</a></li>';
                        echo '<li><a href="#">Mis Compras</a></li>';
                        echo '<li><a href="./index.php?accion=logout">Cerrar Sesión</a></li>';
                        echo '</ul>';
                        }elseif ($_SESSION['admin']==true){
                            echo '<ul class="mi_perfil_categorias">';
                            echo '<li><a href="index.php?accion=administracion&estado=0">Administración</a></li>';
                            echo '<li><a href="index.php?accion=logout">Cerrar Sesión</a></li>';
                            echo '</ul>';
                    }else {
                        echo '<ul class="mi_perfil_categorias">';
                        echo '<li><a href="./index.php?accion=login&estado=0">Login</a></li>';
                        echo '<li><a href="./index.php?accion=registro&estado=0">Registro</a></li>';
                        echo '</ul>';
                    }
                ?>
                </div>
            </div>

          </header>
          <nav class="menu">

              <ul>
                  <?php
                  foreach ($categorias as $datos){
                        if ($datos['NomCategoria']=="Contacta"){
                            echo '<li><a href="index.php?accion=contacta">' . $datos['NomCategoria'] . '</a></li>';
                        }else{
                            echo '<li><a href="#" onclick="getProductos(' . $datos['idCategoria'] .')">' . $datos['NomCategoria'] . '</a></li>';
                        }

                    }
                  ?>
              </ul>

          </nav>

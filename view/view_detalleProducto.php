
<?php
    foreach ($producto as $row){

        switch ($row['idTalla']){
            case 1:
                $talla = "XS";
                break;
            case 2:
                $talla = "S";
                break;
            case 3:
                $talla = "M";
                break;
            case 4:
                $talla = "L";
                break;
            case 5:
                $talla = "XL";
                break;
        }

        echo '<div id="imagenProducto">';
        echo '<br><img src="' . $row['Imagen'] . '"/> <br/>';
        echo '</div>';

        echo '<div id="textoProducto">';
        echo '<h1>' . $row['Nombre_Producto'] . '</h1>';
        echo '<h3>' . $row['Descripcion'] . '</h3>';
        echo '<h5>' . $row['Descripcion_Larga'] . '</h5>';
        echo '<h5> Talla: ' .$talla . '</h5>';
        echo '<div id="precioProducto>"<h2 style="color: grey">' .$row['Precio'] . '€ </h2></div>';

    }
?>
    <br/>
    Cantidad: <input type="text" id="cantidad" name="cantidad" min="1" value="1" maxlength="3" size="1"> <br/><br/>

<?php
    if(isset($_SESSION['loggedin'])){

        echo '<button onclick="anadirProductoCarrito(' . $row['idProducto'] . ')">Añadir al carrito</button>';

        }else{
            echo '<button onclick="anadirProductoCarritoFail()">Añadir al carrito</button>';
    }
?>
    <br/>
    <br/>
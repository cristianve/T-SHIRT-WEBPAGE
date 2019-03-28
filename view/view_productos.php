<?php
    foreach ($productos as $row){
        echo '<div id="producto">';
        echo '<div><a id="productoLink" href="#" onclick="getDetalleProducto(' . $row['idProducto'] .')"> <img src="' . $row['Imagen'] . '"/></a></div>';
        echo '<div style="font-weight: bold">' . $row['Nombre_Producto'] . '</div>';
        echo '<div style="color: grey">' . $row['Precio'] . '€</div>';
        echo '</div>';
    }
?>

<div id="contenido" class="contenido">

    <h2>Resumen Carrito</h2>

    <table id="tablaResultados">
        <tr>
            <th>ID</th>
            <th>Nombre Producto</th>
            <th>Cantidad</th>
            <th>Precio Unidad</th>
            <th>Precio Total</th>
        </tr>


    <?php

        foreach ($_SESSION['carrito'] as $row=>$cantidad){

            $item = getProductoCarrito($conexion, $row);

            echo '<tr>';
            echo '<td>' . $row . '</td>';
            echo '<td>' . $item["Nombre_Producto"] . '</td>';
            echo '<td>' . $cantidad . '</td>';
            echo '<td>'. $item['Precio'] . '€</td>';
            echo '<td>'. $cantidad*$item['Precio'] . '€</td>';
            echo '</tr>';
            $total +=$cantidad*$item['Precio'];
        }
    ?>

    </table>
    <h3> Total Pedido: <?php echo $total ?>€</h3>

    <button onclick="finalizarCompra()">Confirmar Compra</button>

    <button onclick="vaciarCarrito()">Vaciar Carrito</button>

</div>

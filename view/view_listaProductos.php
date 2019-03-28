<div id="contenido" class="contenido">

    <h2>Panel de administración</h2>
    <h3>Listado de productos </h3>

    <table id="tablaResultados">
        <tr>
            <th>ID Producto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Talla</th>
            <th>Categoria</th>
            <th>Activo</th>
        </tr>

        <?php
            foreach ($product as $var){
                echo '<tr>';
                echo '<td>' . $var['idProducto'] . '</td>';
                echo '<td>' . $var['Nombre_Producto'] . '</td>';
                echo '<td>' . $var['Precio'] . '€</td>';
                echo '<td>' . $var['Stock'] . '</td>';
                echo '<td>' . $var['Descripcion'] . '</td>';
                echo '<td>' .'<img src="' . $var['Imagen'] . '" width=10% />'. '</td>';
                echo '<td>' . $var['Nombre_Talla'] . '</td>';
                echo '<td>' . $var['NomCategoria'] . '</td>';
                echo '<td>' . $var['Actiu'] . '</td>';
                echo '</tr>';
            }
        ?>

    </table>

    <br/>
    <br/>

    <button onclick="javascript:location.href ='index.php?accion=administracion&estado=0';">Volver</button>

    <br/>
    <br/>
    <br/>
    <br/>

</div>



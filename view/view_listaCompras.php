<div id="contenido" class="contenido">

    <h2>Panel de administración</h2>
    <h3>Listado de compras </h3>

    <table id="tablaResultados">
        <tr>
            <th>ID Factura</th>
            <th>Nombre Cliente</th>
            <th>Hora</th>
            <th>Fecha</th>
            <th>Importe Total</th>
        </tr>

        <?php
            foreach ($list as $var){
                echo '<tr>';
                echo '<td>' . $var['idFactura'] . '</td>';
                echo '<td>' . $var['Nom'] . '</td>';
                echo '<td>' . $var['Hora'] . '</td>';
                echo '<td>' . $var['Fecha'] . '</td>';
                echo '<td>' . $var['Total'] . '€</td>';
                echo '</tr>';
            }
        ?>

    </table>

    <br/>
    <br/>
    <button onclick="javascript:location.href ='index.php?accion=administracion&estado=0';">Volver</button>


</div>



<div id="contenido" class="contenido">
    <h2>Panel de administración</h2>
    <h3>Añadir Producto</h3>

    <form id="registro" name="anadirProducto" action="index.php?accion=administracion&estado=3&admin=1" method="post" autocomplete="on" enctype="multipart/form-data">

        <label>Nombre: </label>
        <input type="text" name="nombre" />

        <label>Precio: </label>
        <input type="text" name="precio" />

        <label>Stock:</label>
        <input type="number" name="stock" />

        <label>Descripcion: </label>
        <input type="text" name="descripcion" />

        <label>Descripcion Larga: </label>
        <textarea name="descripcionLarga" rows="5"cols="45"></textarea>


        <label>Imagen: </label>
        <input type="file" id="imagen" name="imagen" >

        <label>Talla: </label>
        <select name="idTalla">
            <option value="1">XS</option>
            <option value="2">S</option>
            <option value="3">M</option>
            <option value="4">L</option>
            <option value="5">XL</option>
        </select>

        <label>Categoria: </label>
        <select name="idCategoria">
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
            <option value="3">Niños</option>
            <option value="4">Padres</option>
        </select>

        <label>Activo: </label>
        <select name="actiu">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
        <br/>
        <br/>


        <button type="submit">Añadir producto</button>
        <button type="reset">Borrar</button><br/>

    </form>

    <br/>
    <br/>
    <button onclick="javascript:location.href ='index.php?accion=administracion&estado=0';">Volver</button>
    <br/>
    <br/>
    <br/>

</div>
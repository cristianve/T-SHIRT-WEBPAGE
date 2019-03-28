
<div id="contenido" class="contenido">
    <h2>Registro</h2>

    <form id="registro" name="formularioregistro" action="index.php?accion=registro&estado=1" method="post" autocomplete="on">
        <label for="nom">Nombre: </label>
        <input type="text" name="nombre" pattern="[a-zA-Z]+" required/>

        <label for="password">Password: </label>
        <input type="password" name="password" pattern="[a-zA-Z_0-9]+" title="Solo carácteres alfanuméricos"  required/>

        <label for="email">Email: </label>
        <input type="email" name="email" title="Ejemplo: juan@hotmail.com" required/>

        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion" pattern="[a-zA-Z_0-9\s]+" maxlength="30" title="Máximo 30 carácteres y sin caracteres especiales" required/>

        <label for="poblacion">Población: </label>
        <input type="text" name="poblacion"  pattern="[a-zA-Z\s]+" maxlength="30 "title="Solo carácteres alfanuméricos y espacios" required/>

        <label for="cp">Código Postal: </label>
        <input type="text" name="cp" pattern="[0-9]{5}" title="Ejemplo: 08780" required/>

        <button type="submit">Enviar</button>
        <button type="reset">Borrar</button>
    </form>
    <br/>
    <br/>
    <br/>

</div>

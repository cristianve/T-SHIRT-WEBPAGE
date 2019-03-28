<?php

function añadirProducto($conexion, $nombre, $precio, $stock, $descripcion, $descripcionLarga, $img2, $idTalla, $idCateoria, $actiu){

    $sql = "INSERT INTO Productos (Nombre_producto, Precio, Stock, Descripcion, Descripcion_Larga, Imagen, idTalla, idCategoria, Actiu) VALUES (?,?,?,?,?,?,?,?,?)";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param(sdisssiii, $nombre, $precio,$stock, $descripcion, $descripcionLarga, $img2, $idTalla, $idCateoria, $actiu);
    $stmt->execute();
    $stmt->close();
}


function obtenerCompras($conexion){

    $sql = "SELECT Facturas.idFactura, Usuarios.Nom, Facturas.Hora, Facturas.Fecha, Facturas.Total 
            FROM Facturas, Usuarios 
            WHERE Facturas.idUsuario = Usuarios.idUsuario 
            ORDER BY Facturas.Fecha DESC";

    $result = $conexion->query($sql);
    $results = [];

    while ($row = $result->fetch_assoc()){
        $results[] = $row;
    }

    return $results;

}


function obtenerProductos($conexion){

    $sql = "SELECT Productos.idProducto, Productos.Nombre_Producto, Productos.Precio, Productos.Stock, Productos.Descripcion, Productos.Imagen, Tallas.Nombre_Talla, Categorias.NomCategoria, Productos.Actiu 
            FROM Productos, Tallas, Categorias
            WHERE Productos.idTalla = Tallas.idTallas
            AND Productos.idCategoria = Categorias.idCategoria
            ORDER BY Productos.idProducto DESC";

    $result = $conexion->query($sql);
    $results = [];

    while ($row = $result->fetch_assoc()){
        $results[] = $row;
    }

    return $results;
}



?>
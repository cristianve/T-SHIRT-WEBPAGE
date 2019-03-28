<?php

function anadirFactura($conexion, $usuario, $hora, $fecha, $total){

    $sql = "INSERT INTO Facturas (idUsuario, Hora, Fecha, Total) VALUES (?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param(issd, $usuario, $hora, $fecha, $total);
    $stmt->execute();
    $stmt->close();
}

function anadirProductoFactura ($conexion, $idFactura, $idProducto, $cantidad){

    $sql = "INSERT INTO ProductosFacturas (ProductosFacturas.idFactura, ProductosFacturas.idProducto, ProductosFacturas.Cantidad) VALUES (?, ?, ?)";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param(iii, $idFactura, $idProducto, $cantidad);
    $stmt->execute();
    $stmt->close();
}

function getIDUltimaFactura($conexion){

    $sql = "SELECT * FROM Facturas ORDER BY Facturas.idFactura DESC";

    $result = $conexion->query($sql);

    $resultado = $result->fetch_assoc();

    return $resultado['idFactura'];

}

?>
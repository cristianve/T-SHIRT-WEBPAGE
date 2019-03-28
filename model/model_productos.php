<?php

function getProductos($conexion, $idCategoria){

    $sql = "SELECT * FROM Productos WHERE idCategoria=" . $idCategoria;
    $result = $conexion->query($sql);
    $results = [];

    while ($row = $result->fetch_assoc()){
        $results[] = $row;
    }

    return $results;
}


function getDetalleProducto($conexion, $idProducto){

    $sql = "SELECT * FROM Productos WHERE idProducto= " . $idProducto;
    $result = $conexion->query($sql);
    $resultado = [];

    while ($row = $result->fetch_assoc()){
        $resultado[] = $row;
    }

    return $resultado;
}


function getProductoCarrito($conexion, $idProducto){

    $sql = "SELECT * FROM Productos WHERE idProducto= " . $idProducto;
    $result = $conexion->query($sql);

    $resultado = $result->fetch_assoc();


    return $resultado;
}



?>
<?php

function getCategorias($conexion){

    $sql = "SELECT * FROM Categorias";
    $res = $conexion->query($sql);
    $resultados = [];

    while ($row = $res->fetch_assoc()){
        $resultados[] = $row;
    }

    return $resultados;
}

?>
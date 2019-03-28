<?php

function anadirUsuario($conexion, $nombre, $password, $email, $direccion, $poblacion, $cp){

    $sql = "INSERT INTO Usuarios (Nom, Password, Email, Direccion, Poblacion, CP, Tipo) VALUES (?,?,?,?,?,?,?)";

    $stmt = $conexion->prepare($sql);
    $admin = 0;

    $stmt->bind_param("ssssssi", $nombre, $password, $email, $direccion, $poblacion, $cp, $admin);
    $stmt->execute();
    $stmt->close();
}

function comprobarUsuario($conexion, $email, $password){
    $resultado = false;

    $sql = "SELECT * FROM Usuarios Where Email = '$email'";

    $result = $conexion->query($sql);

    if ($result->num_rows > 0){

        $row = $result->fetch_array(MYSQLI_ASSOC);

        if(password_verify($password, $row['Password'])){

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;
            $_SESSION['start'] = time();
            $_SESSION['admin'] = false;
            $_SESSION['totalProductos'] = 0;
            $_SESSION['totalEuros'] = 0;

            $resultado = true;

            if ($row['Tipo'] == 1){
                $_SESSION['admin'] = true;
            }

        }
    }
    return $resultado;
}

function getIDUsuarioByEmail($conexion, $email)
{
    $sql = "SELECT * FROM Usuarios Where Email = '$email'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
    }

    return $row['idUsuario'];
}

?>
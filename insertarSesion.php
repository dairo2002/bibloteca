<?php

include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $sql = "INSERT INTO iniciarsesion (nombre, contraseña) VALUES ('$usuario','$contraseña')";

    if (mysqli_query($conn, $sql)) {
        echo "Datos insertados";

    } else {
        echo "Error al insertar datos" . mysqli_error($conn);
    }

}

mysqli_close($conn);

?>
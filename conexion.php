<?php 

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$database = "biblioteca";

$conn = mysqli_connect($servidor, $usuario, $contraseña, $database);

if ($conn) {
    echo "Conexión exitosa a la base de datos. <br>";
} else {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}

// mysqli_close($conn);

?>

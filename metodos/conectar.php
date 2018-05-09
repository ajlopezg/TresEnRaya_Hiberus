<?php

include "objetos/conexion.php";

function conectar()
{
    $conexion = new connection("localhost", "root", "", "tres_en_raya");

    $conn = mysqli_connect($conexion->servername, $conexion->username, $conexion->password, $conexion->database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

?>
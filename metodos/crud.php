<?php
function seleccionar($conn)
{
    $sql = "SELECT * FROM tablero";
    $result = $conn->query($sql);
    return $row = mysqli_fetch_assoc($result);
}
function insertar($conn, $celda, $letra)
{
    switch ($celda) {
        case 1:
            $sql = "INSERT INTO `tablero`(`celda_uno`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
        case 2:
            $sql = "INSERT INTO `tablero`(`celda_dos`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
        case 3:
            $sql = "INSERT INTO `tablero`(`celda_tres`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
        case 4:
            $sql = "INSERT INTO `tablero`(`celda_cuatro`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
        case 5:
            $sql = "INSERT INTO `tablero`(`celda_cinco`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
        case 6:
            $sql = "INSERT INTO `tablero`(`celda_seis`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
        case 7:
            $sql = "INSERT INTO `tablero`(`celda_siete`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
        case 8:
            $sql = "INSERT INTO `tablero`(`celda_ocho`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
        case 9:
            $sql = "INSERT INTO `tablero`(`celda_nueve`) VALUES ('$letra')";
            $result = $conn->query($sql);
            break;
    }
}
function actualizar($conn, $celda, $letra)
{
    switch ($celda) {
        case 1:
            $sql = "UPDATE `tablero` SET `celda_uno`='$letra'";
            $result = $conn->query($sql);
            break;
        case 2:
            $sql = "UPDATE `tablero` SET `celda_dos`='$letra'";
            $result = $conn->query($sql);
            break;
        case 3:
            $sql = "UPDATE `tablero` SET `celda_tres`='$letra'";
            $result = $conn->query($sql);
            break;
        case 4:
            $sql = "UPDATE `tablero` SET `celda_cuatro`='$letra'";
            $result = $conn->query($sql);
            break;
        case 5:
            $sql = "UPDATE `tablero` SET `celda_cinco`='$letra'";
            $result = $conn->query($sql);
            break;
        case 6:
            $sql = "UPDATE `tablero` SET `celda_seis`='$letra'";
            $result = $conn->query($sql);
            break;
        case 7:
            $sql = "UPDATE `tablero` SET `celda_siete`='$letra'";
            $result = $conn->query($sql);
            break;
        case 8:
            $sql = "UPDATE `tablero` SET `celda_ocho`='$letra'";
            $result = $conn->query($sql);
            break;
        case 9:
            $sql = "UPDATE `tablero` SET `celda_nueve`='$letra'";
            $result = $conn->query($sql);
            break;
    }
}

function borrar($conn)
{
    $sql = "DELETE FROM `tablero`";
    $result = $conn->query($sql);
}
?>
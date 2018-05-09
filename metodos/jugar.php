<?php

function jugar($i, $caracter, $conn, $row)
{
    /* echo "jugar antes swith (contador) = " . $_SESSION['contador']; */
    switch ($i) {
        case 1:
            if (isset($row['celda_uno'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);
            }
            break;
        case 2:
            if (isset($row['celda_dos'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);
            }
            break;
        case 3:
            if (isset($row['celda_tres'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);
            }
            break;
        case 4:
            if (isset($row['celda_cuatro'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);
            }
            break;
        case 5:
            if (isset($row['celda_cinco'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);
            }
            break;
        case 6:
            if (isset($row['celda_seis'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);
            }
            break;
        case 7:
            if (isset($row['celda_siete'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);

            }
            break;
        case 8:
            if (isset($row['celda_ocho'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);
            }
            break;
        case 9:
            if (isset($row['celda_nueve'])) {
                actualizar($conn, $i, $caracter);
            } else {
                insertar($conn, $i, $caracter);
            }
            break;
    }
    /* echo "jugar despues switch (contador) = " . $_SESSION['contador']; */
}
?>
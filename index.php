<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tres en Raya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>

<?php

session_start();

include "metodos/conectar.php";
include "metodos/crud.php";
include "metodos/jugar.php";
include "metodos/verificarPartida.php";

include "objetos/tablero.php";

$conn = conectar();
$row = seleccionar($conn);

$posicion = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

if (isset($_POST['user_button'])) {
    if (isset($_SESSION['jugador'])) {
        $_SESSION['jugador']++;
        if ($_SESSION['jugador'] % 2 != 0) {
            $jugador = "Jugador 1";
        } else {
            $jugador = "Jugador 2";
        }
    } else {
        $_SESSION['jugador'] = 1;
        $jugador = "Jugador 1";
    }
}

if (isset($_POST['user_button'])) {

    /* if (!(isset($_SESSION['ultimos_mov']))) {
        $_SESSION['ultimos_mov'] = new ultimos_movimientos();
        echo "seteo ultimos_mov";
    } */

    foreach ($posicion as $i) {
        if ($i == $_POST['user_button']) {
            if (isset($_SESSION['jugador'])) {
                if ($_SESSION['jugador'] % 2 != 0) {
                    $caracter = "X";
                    jugar($i, $caracter, $conn, $row);
                } else {
                    $caracter = "Y";
                    jugar($i, $caracter, $conn, $row);
                }
            }
        }
    }
    $row = seleccionar($conn);
}

if (isset($_POST['user_button'])) {

}

if (isset($_POST['reset'])) {
    borrar($conn);
    $row = seleccionar($conn);
    /* unset($_SESSION['ultimos_mov']); */
    /* session_destroy(); */
}

$nuevoTablero = new tablero($row['celda_uno'], $row['celda_dos'], $row['celda_tres'], $row['celda_cuatro'], $row['celda_cinco'], $row['celda_seis'], $row['celda_siete'], $row['celda_ocho'], $row['celda_nueve']);

verificarPartidaGanada($nuevoTablero);

verificarPartidaEmpatada($nuevoTablero);

?>

<body>
    <br>
    <br>
    <div class="container">
        <h1 class="text-center">
            <?php
            global $nuevoTablero;
            $mensaje;
            if (verificarPartidaGanada($nuevoTablero)) {
                global $caracter;
                $mensaje = "¡Han ganado las " . $caracter . "'s ! ";
                echo $mensaje;
            } elseif (verificarPartidaEmpatada($nuevoTablero)) {
                $mensaje = "¡Partida empatada! ";
                echo $mensaje;
            } else {
                $mensaje = "¡Jugada disponible!";
                echo $mensaje;
            }
            ?>
        </h1>
        <h2>
            <?php
            /* echo $_SESSION['ultimo_movimiento'];
            echo " ";
            echo $_SESSION['penultimo_movimiento'];
            echo " ";
            echo $_SESSION['antepenultimo_movimiento']; */
            ?>
        </h2>
        <form method="post">
            <table class="table text-center">
                <tbody>
                    <tr>
                        <td>
                            <button name="user_button" type="submit" value="1" class="btn btn-primary btn-block btn-sm" 
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_uno != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero)) {
                                echo "disabled = disabled";
                            }
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_uno;
                                ?>
                            </button>
                        </td>
                        <td class="">
                            <button name="user_button" type="submit" value="2" class="btn btn-primary btn-block btn-sm"
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_dos != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero))
                                echo "disabled = disabled";
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_dos;
                                ?>
                            </button>
                        </td>
                        <td>
                            <button name="user_button" type="submit" value="3" class="btn btn-primary btn-block btn-sm"
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_tres != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero))
                                echo "disabled = disabled";
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_tres;
                                ?>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button name="user_button" type="submit" value="4" class="btn btn-primary btn-block btn-sm"
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_cuatro != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero))
                                echo "disabled = disabled";
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_cuatro;
                                ?>
                            </button>
                        </td>
                        <td>
                            <button name="user_button" type="submit" value="5" class="btn btn-primary btn-block btn-sm"
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_cinco != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero))
                                echo "disabled = disabled";
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_cinco;
                                ?>
                            </button>
                        </td>
                        <td>
                            <button name="user_button" type="submit" value="6" class="btn btn-primary btn-block btn-sm"
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_seis != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero))
                                echo "disabled = disabled";
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_seis;
                                ?>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button name="user_button" type="submit" value="7" class="btn btn-primary btn-block btn-sm"
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_siete != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero))
                                echo "disabled = disabled";
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_siete;
                                ?>
                            </button>
                        </td>
                        <td>
                            <button name="user_button" type="submit" value="8" class="btn btn-primary btn-block btn-sm"
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_ocho != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero))
                                echo "disabled = disabled";
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_ocho;
                                ?>
                            </button>
                        </td>
                        <td>
                            <button name="user_button" type="submit" value="9" class="btn btn-primary btn-block btn-sm"
                                style="height:30px; width:60px; margin: 0 auto;"
                            <?php
                            global $nuevoTablero;
                            if ($nuevoTablero->celda_nueve != "" || verificarPartidaGanada($nuevoTablero) || verificarPartidaEmpatada($nuevoTablero))
                                echo "disabled = disabled";
                            ?>>
                                <?php
                                global $nuevoTablero;
                                echo $nuevoTablero->celda_nueve;
                                ?>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="container text-center">
                <input name="reset" type="submit" value="¡Reiniciar!">
            </div>
            <!-- <input name="save" type="submit" value="Guardar partida"> -->
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
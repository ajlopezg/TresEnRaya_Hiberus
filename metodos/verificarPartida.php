<?php

function verificarPartidaGanada($tablero)
{
    if (($tablero->celda_uno == $tablero->celda_dos && $tablero->celda_uno == $tablero->celda_tres && $tablero->celda_uno != "") || ($tablero->celda_uno == $tablero->celda_cuatro && $tablero->celda_uno == $tablero->celda_siete && $tablero->celda_uno != "") || ($tablero->celda_uno == $tablero->celda_cinco && $tablero->celda_uno == $tablero->celda_nueve && $tablero->celda_uno != "") || ($tablero->celda_cuatro == $tablero->celda_cinco && $tablero->celda_cuatro == $tablero->celda_seis && $tablero->celda_cuatro != "") || ($tablero->celda_siete == $tablero->celda_ocho && $tablero->celda_siete == $tablero->celda_nueve && $tablero->celda_siete != "") || ($tablero->celda_siete == $tablero->celda_cinco && $tablero->celda_siete == $tablero->celda_tres && $tablero->celda_siete != "") || ($tablero->celda_dos == $tablero->celda_cinco && $tablero->celda_dos == $tablero->celda_ocho && $tablero->celda_dos != "") || ($tablero->celda_tres == $tablero->celda_seis && $tablero->celda_tres == $tablero->celda_nueve && $tablero->celda_tres != "")) {
        return true;
    }
    return false;
}

function verificarPartidaEmpatada($tablero)
{
    if ($tablero->celda_uno != "" && $tablero->celda_dos != "" && $tablero->celda_tres != "" && $tablero->celda_cuatro != "" && $tablero->celda_cinco != "" && $tablero->celda_seis != "" && $tablero->celda_siete != "" && $tablero->celda_ocho != "" && $tablero->celda_nueve != "") {
        return true;
    }
    return false;
}

?>
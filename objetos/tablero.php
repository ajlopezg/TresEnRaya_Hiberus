<?php

// Modelo del tablero

class tablero
{
    public $celda_uno;
    public $celda_dos;
    public $celda_tres;
    public $celda_cuatro;
    public $celda_cinco;
    public $celda_seis;
    public $celda_siete;
    public $celda_ocho;
    public $celda_nueve;

    public function __construct($cu, $cd, $ct, $cc, $cci, $cs, $csi, $co, $cn)
    {
        $this->celda_uno = $cu;
        $this->celda_dos = $cd;
        $this->celda_tres = $ct;
        $this->celda_cuatro = $cc;
        $this->celda_cinco = $cci;
        $this->celda_seis = $cs;
        $this->celda_siete = $csi;
        $this->celda_ocho = $co;
        $this->celda_nueve = $cn;
    }

}
?>
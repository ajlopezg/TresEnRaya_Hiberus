<?php

// Modelo de la conexión

class connection
{
    public $servername;
    public $username;
    public $password;
    public $database;

    public function __construct($sname, $uname, $pword, $dbase)
    {
        $this->servername = $sname;
        $this->username = $uname;
        $this->password = $pword;
        $this->database = $dbase;
    }
}
?>
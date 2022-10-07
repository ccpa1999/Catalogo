<?php

class conexion extends mysqli
{
    private $mysqli;
    private $servidor;
    private $usuario;
    private $clave;
    private $database;


    function __construct()
    {
        $this->servidor = '127.0.0.1:3307';
        $this->usuario = 'root';
        $this->password = '';
        $this->database = 'catalogo';

        $this->conect();
    }

    private function conect()
    {
        $this->mysqli = new mysqli($this->servidor, $this->usuario, $this->clave, $this->database);
        if ($this->mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
        } else {
            echo "Conectado";
        }
    }
}

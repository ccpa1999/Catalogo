<?php

include_once '../../config/conect.php';

$auth = new auth($_POST);

class auth extends conexion{
    var $usuario;
    var $password;

    function __construct($datos = [])
    {
        file_put_contents("a.json", json_encode($datos));
    }
}
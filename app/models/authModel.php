<?php

include_once '../../config/conect.php';

class auth extends conexion
{
    private $usuario;
    private $pass;

    function controlador($datos)
    {
        $this->usuario = $datos['usuario'];
        $this->pass = $datos['password'];
        if (!isset($datos['usuario'])) {
            $this->logouth();
        }
        $this->iniciarSesion();
    }

    private function iniciarSesion()
    {
        $query = "SELECT * FROM usuarios WHERE usuario = '" . $this->usuario . "' AND password = MD5('" . $this->pass . "');";
        $resultado = mysqli_query($this->mysqli, $query)->fetch_assoc();
        session_start();
        $_SESSION['usuario'] = $resultado['usuario'];
        header('location: ../controllers/productController.php');
        return $resultado;
    }

    function logouth()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../../index.php");
    }
}

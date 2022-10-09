<?php

include_once '../../config/conect.php';

class productModel extends conexion
{
    private $nombre;
    private $stock;

    function controlador($datos)
    {
        session_start();
        if (isset($_SESSION['usuario'])) {
            $metodo = (isset($datos['metodo'])) ? $datos['metodo'] : 'dashboard';
            return $this->$metodo($datos);
        } else {
            $auth = new auth();
            $auth->logouth();
        }
    }

    private function dashboard()
    {
        $productos = $this->obtenerProductos();
        echo json_encode($productos);
    }

    public function obtenerProductos()
    {
        $query = "SELECT * FROM productos";
        $array = array();
        $ejecuta = mysqli_query($this->mysqli, $query);
        $i = 0;
        while ($fila = $ejecuta->fetch_assoc()) {
            $array[$i] = $fila;
            $i++;
        }
        $resultado['productos'] = $array;
        return $resultado;
    }

    private function obtenerProducto($datos)
    {
        $query = "SELECT * FROM productos WHERE id = $datos[id];";
        $resultado = mysqli_query($this->mysqli, $query)->fetch_assoc();
        return $resultado;
    }

    private function crearProducto($datos)
    {
        move_uploaded_file($_FILES['imagen']['tmp_name'], '../../public/images/' . $datos['producto'] . '.png');
        $query = "INSERT INTO productos (producto, stock) VALUES ('$datos[producto]', '$datos[stock]')";
        $resultado = mysqli_query($this->mysqli, $query);
        return $resultado;
    }

    private function eliminarProducto($datos)
    {
        $query = "DELETE FROM productos WHERE id = $datos[id];";
        $resultado = mysqli_query($this->mysqli, $query);
        return $resultado;
    }

    private function actualizarProductos($datos)
    {
        $query = "UPDATE productos SET producto = '$datos[producto]', stock = $datos[stock] WHERE id = $datos[id];";
        $resultado = mysqli_query($this->mysqli, $query);
        return $resultado;
    }
}

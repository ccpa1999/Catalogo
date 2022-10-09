<?php

include_once '../models/productModel.php';
include_once '../models/authModel.php';

session_start();

$product = new productController($_POST);

class productController
{
    var $productModel;

    function __construct($datos)
    {
        $this->productModel = new productModel($datos);
        if (isset($_SESSION['usuario'])) {
            $data = $this->productModel->controlador($datos);
            if (!isset($datos['metodo']) || $datos['metodo'] == 'dashboard') {
                header('location: ../../resources/views/layouth.php');
            } else {
                echo json_encode($data);
            }
        } elseif (isset($datos['metodo']) && !isset($_SESSION['usuario'])) {
            $data = $this->productModel->obtenerProductos();
            echo json_encode($data);
        } else {
            $auth = new auth();
            $auth->logouth();
        }
    }
}

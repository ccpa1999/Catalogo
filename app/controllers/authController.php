<?php

include_once '../models/authModel.php';

$auth = new authController($_POST);

class authController
{
    var $claseAuth;

    function __construct($datos)
    {
        $this->claseAuth = new auth();
        $datos = $this->claseAuth->controlador($datos);
        echo $datos;
    }
}

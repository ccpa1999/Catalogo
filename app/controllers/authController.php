<?php

include_once '../models/authModel.php';

$auth = new authController($_POST);

class authController {
    var $claseAuth;

    function __construct()
    {
        $this->claseAuth = new auth();
    }
}
<?php
require_once 'model/login.php';
class LoginController{
    private $model;
    public function __construct() {
        $this->model=new Login();
    }

    public function iniciar(){
        $datos=new Login();
        $user= md5($_REQUEST['usuario']);
        $pass= md5($_REQUEST['contrasena']);
        $datos->usuario=$user;
        $datos->contrasena=$pass;
        $this->model->verificar($datos);
    }
    public function cerrarSesion(){
         $this->model->cerrarSesion();
     }
}

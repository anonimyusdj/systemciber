<?php

require_once 'model/administrador.php';
class AdminController{
    private $model;
    
    public function __construct() {
        $this->model=new Administrador();
    }
    public function index(){
        require_once 'view/partes/header.php';
        require_once 'view/admin/menuAdmin.php';
        require_once 'view/admin/homeAdmin.php';
        require_once 'view/partes/footer.php';
    }
    public function agregarAdmin(){
        $dato=new Administrador();
        $user= md5($_REQUEST['usuario']);
        $pass= md5($_REQUEST['password']);
        $sexo=$_REQUEST['sexo'];
        if($sexo=="Masculino"){
            $foto="assets/multimedia/imagenesSistema/user_male.png";
        } else {
            $foto="assets/multimedia/imagenesSistema/user_female.png";
        }
        $dato->nombres=$_REQUEST['nombres'];
        $dato->apellidos=$_REQUEST['apellidos'];
        $dato->direccion=$_REQUEST['direccion'];
        $dato->telefono=$_REQUEST['telefono'];
        $dato->usuario=$user;
        $dato->contrasena=$pass;
        $dato->sexo=$sexo;
        $dato->foto_cliente=$foto;
        $this->model->guardarAdmin($dato);
    }
}

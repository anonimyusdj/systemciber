<?php

require_once 'model/clientes.php';

class ClientesController{
    
    private $model;
    
    public function __construct() {
        $this->model=new Clientes();
    }
    public function index(){
        require_once 'view/partes/header.php';
        require_once 'view/clientes/menuCliente.php';
        require_once 'view/clientes/homeCliente.php';
        require_once 'view/partes/footer.php';
    }
    public function agregarCliente(){
        
        $dato=new Clientes();
        $res= $this->model->obtenerCont()+1;
        
        $user= md5($_REQUEST['usuario']);
        $pass= md5($_REQUEST['password']);
        $sexo=$_REQUEST['sexo'];
        if($sexo=="Masculino"){
            $foto="assets/multimedia/imagenesSistema/user_male.png";
        } else {
            $foto="assets/multimedia/imagenesSistema/user_female.png";
        }
        $dato->id_cliente="cl".$res;
        $dato->nombres=$_REQUEST['nombres'];
        $dato->apellidos=$_REQUEST['apellidos'];
        $dato->direccion=$_REQUEST['direccion'];
        $dato->telefono=$_REQUEST['telefono'];
        $dato->usuario=$user;
        $dato->contrasena=$pass;
        $dato->sexo=$sexo;
        $dato->foto_cliente=$foto;
        $this->model->guardarClite($dato);
    }
  
}
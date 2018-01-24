<?php
class IndexController{
    
    public function index(){
        require_once 'view/partes/header.php';
        require_once 'view/home/menu.php';
        require_once 'view/home/home.php';
        require_once 'view/partes/footer.php';
    }
    public function frmRegistro(){
         require_once 'view/partes/header.php';
        require_once 'view/home/menu.php';
        require_once 'view/clientes/registro.php';
        require_once 'view/partes/footer.php';
    }
    public function login(){
        require_once 'view/partes/header.php';
        require_once 'view/home/menu.php';
        require_once 'view/home/login.php';
        require_once 'view/partes/footer.php';
    }
}
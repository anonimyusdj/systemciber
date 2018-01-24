<?php

require_once 'model/database.php';

class Clientes{
    private $pdo;
    public $id_cliente;
    public $nombres;
    public $apellidos;
    public $direccion;
    public $telefono;
    public $sexo;
    public $usuario;
    public $contrasena;
    public $foto_cliente;
    private $rs;
    private $sql;
    private $st;
    
    public function __construct() {
        $this->pdo= Database::Connetion();
    }
    public function guardarClite(Clientes $datos){
        try {
            $sql="INSERT INTO clientes(id_cliente,nombres,apellidos,direccion,telefono,sexo,usuario,contrasena,foto_cliente,fecha_ingreso) values(?,?,?,?,?,?,?,?,?,NOW())";
            $this->pdo->prepare($sql)->execute(array(
                $datos->id_cliente,
                $datos->nombres,
                $datos->apellidos,
                $datos->direccion,
                $datos->telefono,
                $datos->sexo,
                $datos->usuario,
                $datos->contrasena,
                $datos->foto_cliente
            ));
            header("location:exitorg");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
     public function obtenerCont(){
         try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT count(id_cliente)as id FROM clientes");
			$stm->execute();

			return $stm->fetch(PDO::FETCH_COLUMN,0);
                         $stm->closeCursor();
        $this->pdo=NULL;
        $stm=NULL;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
     }
     public function obtenerCorreo($user){
         try {
             $result = array();

			$stm = $this->pdo->prepare("SELECT count(usuario)as id FROM clientes WHERE usuario=?");
			$stm->execute(array($user));

			return $stm->fetch(PDO::FETCH_COLUMN,0);
                         $stm->closeCursor();
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }
     }
}
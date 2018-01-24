<?php

require_once 'model/database.php';

class Administrador{
    private $pdo;
    public $id_administrador;
    public $nombres;
    public $apellidos;
    public $direccion;
    public $telefono;
    public $sexo;
    public $usuario;
    public $contrasena;
    public $foto_cliente;
   
    
    public function __construct() {
        $this->pdo= Database::Connetion();
    }
    public function guardarAdmin(Administrador $datos){
        try {
            $sql="INSERT INTO administradores(nombres,apellidos,direccion,telefono,sexo,usuario,contrasena,foto_admin,fecha_ingreso) values(?,?,?,?,?,?,?,?,NOW())";
            $this->pdo->prepare($sql)->execute(array(
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

			$stm = $this->pdo->prepare("SELECT count(id_admin)as id FROM administradores");
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
}
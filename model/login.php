<?php

class Login{
    private $pdo;
    public $usuario;
    public $contrasena;
    
    public function __construct() {
        $this->pdo= Database::Connetion();
    }
    public function verificar(Login $datos){
        try {
            $sql="SELECT * FROM clientes WHERE usuario=? AND contrasena=? AND estado=? LIMIT 1";
            $login= $this->pdo->prepare($sql);
            $login->execute(array($datos->usuario,$datos->contrasena,1));
            $resultado=$login->fetch(PDO::FETCH_ASSOC);
            if(count($resultado)>0 && ($datos->contrasena==$resultado['contrasena'])){
                session_start();
                    $_SESSION['id_cliente']=$resultado['id_cliente'];
                    $_SESSION['nombres']=$resultado['nombres'];
                    $_SESSION['apellidos']=$resultado['apellidos'];
                    $_SESSION['sexo']=$resultado['sexo'];
                    $_SESSION['direccion']=$resultado['direccion'];
                    $_SESSION['telefono']=$resultado['telefono'];
                    $_SESSION['fotoPerfil']=$resultado['foto_cliente'];
                    $_SESSION['fechaIngreso']=$resultado['fecha_ingreso'];
                    $this->activo($resultado['id_cliente']);
                    header("location:iniciocl");
                    exit();
                   return true;
               
            }else{
                $sql="SELECT * FROM administradores WHERE usuario=? AND contrasena=? AND estado=? LIMIT 1";
                $login= $this->pdo->prepare($sql);
                $login->execute(array($datos->usuario,$datos->contrasena,1));
                $resultado=$login->fetch(PDO::FETCH_ASSOC);
                if(count($resultado)>0 && ($datos->contrasena==$resultado['contrasena'])){
                    session_start();
                        $_SESSION['id_admin']=$resultado['id_admin'];
                        $_SESSION['nombres']=$resultado['nombres'];
                        $_SESSION['apellidos']=$resultado['apellidos'];
                        $_SESSION['sexo']=$resultado['sexo'];
                        $_SESSION['direccion']=$resultado['direccion'];
                        $_SESSION['telefono']=$resultado['telefono'];
                        $_SESSION['fotoPerfil']=$resultado['foto_admin'];
                        $_SESSION['fechaIngreso']=$resultado['fecha_ingreso'];
                        $this->activo($resultado['id_admin']);
                        header("location:inicioad");
                        exit();
                return true;

                }else{
                    header("location:errorlg");
                    }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    public function cerrarSesion(){
        session_start();
        session_destroy();
        $this->desactivo($_REQUEST['id']);
        $this->regSalirm($_REQUEST['id']);
        header("Location:loginc");
        exit();
    
    }
    private function activo($id){
        $sql="INSERT INTO activos(id) VALUE(?)";
        $this->pdo->prepare($sql)->execute(array($id));
        $this->regInicio($id);
    }
    private function desactivo($id){
        $sql="DELETE FROM activos WHERE id=?";
        $this->pdo->prepare($sql)->execute(array($id));
    }
    private function regInicio($id){
        $sql="INSERT INTO bitacoradesesiones(id,operacion,fecha) VALUE(?,?,NOW())";
        $this->pdo->prepare($sql)->execute(array($id,"Inicio"));
    }
     private function regSalirm($id){
        $sql="INSERT INTO bitacoradesesiones(id,operacion,fecha) VALUE(?,?,NOW())";
        $this->pdo->prepare($sql)->execute(array($id,"Cerrar Sesion"));
    }
}

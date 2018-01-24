
<?php
    if(isset($_REQUEST['m'])){
        if($_REQUEST['m']=="t"){
            require_once 'view/mensajes/bcliente.php';
            echo "<script>$(document).ready(function(){
                $('#mensaje').modal('open');
                });
          </script>";
        }
    }
?>
 <div data-activates="perfil"  class="fixed-action-btn horizontal button-collapse">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">settings</i>
    </a>
  </div>
<?php
echo $this->model->obtenerCont();
echo $this->model->obtenerCorreo('1b6e70e79b13723a6c3d1add6b601956');
    require_once 'view/clientes/menuOculto.php';
?>

        
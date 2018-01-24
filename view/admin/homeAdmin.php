<?php
    if(isset($_REQUEST['m'])){
        if($_REQUEST['m']=="t"){
            require_once 'view/mensajes/badmin.php';
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
    require_once 'view/admin/menuOculto.php';
?>
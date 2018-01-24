<div id="mensaje" class="modal">
    <div class="modal-content center">
        <h4>¡Hola <?php echo $_SESSION['nombres']." ".$_SESSION['apellidos'];?>!</h4>
        <?php
            if($_SESSION['sexo']=="Masculino"){
                echo '<p>Bienvenido a PCTECHNOLOGY</p>';
            } else {
                 echo '<p>Bienvenida a PCTECHNOLOGY</p>';
            }
        ?>
        
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
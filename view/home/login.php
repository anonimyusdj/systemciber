<?php if(isset($_REQUEST['r'])){
        if($_REQUEST['r']=="error"){
       echo "<script> Materialize.toast('Usuario o Contraseña Incorrectos o Cuenta Desactivada', 4000)</script>";
      
        }
}
if(isset($_REQUEST['rl'])){
    if($_REQUEST['rl']=="error"){
        echo "<script> Materialize.toast('No ha Iniciado Sesión', 4000)</script>";
    }
}

?>
<div class="row" style="margin-top: 10px">
    <div class="col s12 m4"></div>
<div class="card col s12 m4">
    <form action="iniciar" method="post">   
<div class="row">
    <center>
     <a class="btn tooltipped grey lighten-5" data-position="bottom" data-delay="50" data-tooltip="Login" style=" background-image: url('assets/multimedia/imagenesSistema/login.jpg'); color:#000;font-weight: bold; margin-top: 5px; margin-bottom: 10px; margin-left: 10px; border-radius: 100px; width:150px; height:150px;  background-repeat:no-repeat;  background-size:cover;"></a>
    
    </center>
    <center>
        <?php
            if(isset($_REQUEST['s'])){
                if($_REQUEST['s']=="v"){
                    echo " <div class='chip'>Se ha cerrado sesión con éxito<i class='close material-icons'>close</i></div>";
                }
            }
        ?>
    </center>
      <div class="row">
          
          <div class="input-field col s12">
          <i class="material-icons prefix">contact_mail</i>
          <input id="usuario" type="email" class="validate" required name="usuario" title="Ingrese su Correo" pattern="{3,100}" autocomplete="off">
          <label for="usuario" data-error="Error Formato: ejemplo@gmail.com" data-success="Formato Correcto">Correo</label>
        </div>
          
          <div class="input-field col s12">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate" required name="contrasena" title="Ingrese su contraseña" pattern="{6,100}" autocomplete="off">
          <label for="password" data-error="Tiene que ser más de 8" data-success="">Contraseña</label>
        </div>
          <center>
          <button class="btn blue darken-1 waves-effect waves-purple" type="submit" name="action">Iniciar Sesion
            <i class="material-icons right">lock_open</i>
          </button>
          </center>
        
      </div>
  </div>
     </form>
</div>
    <div class="col s12 m4"></div>
       
    </div>


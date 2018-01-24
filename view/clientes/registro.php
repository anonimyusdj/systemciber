<?php if(isset($_REQUEST['r'])){
        if($_REQUEST['r']=="error"){
        echo "<script> Materialize.toast('Error al Registrarse', 4000)</script>";
        }else{
            if($_REQUEST['r']=="exito"){
               echo "<script> Materialize.toast('Registro Con Exito <a class=\"btn blue-text text-darken-4 white\" href=\"login\">Iniciar Sesion</a>', 4000)</script>";
      
            }
        }
}?>
<div class="row">
    <div class="col s12 m4"></div>
<div class="card col s12 m5">
    <form action="registroAdm" method="post">   
<div class="row">

    <center>
     <a class="btn tooltipped grey lighten-5" data-position="bottom" data-delay="50" data-tooltip="Registro" style=" background-image: url('assets/multimedia/imagenesSistema/registro.png'); color:#000;font-weight: bold; margin-top: 5px; margin-bottom: 10px; margin-left: 10px; border-radius: 100px; width:150px; height:150px;  background-repeat:no-repeat;  background-size:cover;"></a>
    </center>
      <div class="row">
          
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nombres" type="text" class="validate" required name="nombres" title="Ingrese sus Nombres" pattern="[A-Za-z ]{3,100}" required autofocus>
          <label for="nombres" data-error="Solo texto y ser más de 3 letras" data-success="Formato Correcto">Nombres</label>
        </div>
          
          <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="apellidos" type="text" class="validate" required name="apellidos" title="Ingrese sus Apellidos" pattern="[A-Za-z ]{3,100}">
          <label for="apellidos" data-error="Solo texto y ser más de 3 letras" data-success="Formato Correcto">Apellidos</label>
        </div>
          
          <div class="input-field col s12">
          <i class="material-icons prefix">add_location</i>
          <input id="direccion" type="text" class="validate" required name="direccion" title="Ingrese su Direccion" pattern="[A-Za-z 0-9]{3,100}">
          <label for="direccion" data-error="Solo texto y números y ser más de 3" data-success="Formato Correcto">Dirección</label>
        </div>
          
        <div class="input-field col s6">
          <i class="material-icons prefix">contact_phone</i>
          <input id="telefono" type="tel" class="validate" required name="telefono" title="Ingrese su número de teléfono" pattern="[+ 0-9]{8,100}">
          <label for="telefono" data-error="números y ser más de 8" data-success="Formato Correcto">Telefono</label>
        </div>
          
          <div class="input-field col s6">
               <i class="material-icons prefix">wc</i>
               <select class="icons" name="sexo" required>
              <option value="" disabled selected>Sexo</option>
              <option value="Masculino" data-icon="assets/multimedia/imagenesSistema/user_male.png" class="circle">Masculino</option>
              <option value="Femenino" data-icon="assets/multimedia/imagenesSistema/user_female.png" class="circle">Femenino</option> 
            </select>
            <label>Sexo</label>
          </div>
          
          <div class="input-field col s6">
          <i class="material-icons prefix">contact_mail</i>
          <input id="usuario" type="email" class="validate" required name="usuario" title="Ingrese su Correo" pattern="{3,100}" autocomplete="off">
          <label for="usuario" data-error="Error Formato: ejemplo@gmail.com" data-success="Formato Correcto">Correo</label>
        </div>
          
          <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate" required name="password" title="Ingrese su contraseña" pattern="{6,100}" autocomplete="off">
          <label for="password" data-error="Tiene que ser más de 8" data-success="Formato Correcto">Contraseña</label>
        </div>
          <center>
          <button class="btn  blue darken-1 waves-effect waves-purple" type="submit" name="action">Registrarse
            <i class="material-icons right">person_add</i>
          </button>
          </center>
        
      </div>
  </div>
     </form>
</div>
       
    </div>


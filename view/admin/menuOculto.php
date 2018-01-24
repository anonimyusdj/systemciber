 <ul class="side-nav black-text" id="perfil">
          <li><center>
              <div class=" user-view blue darken-2">
              <a class="btn tooltipped blue darken-4 circle responsive-img" data-position="bottom" data-delay="50" data-tooltip="<?php echo $_SESSION['nombres'];?>" style=" background-image: url('<?php echo $_SESSION['fotoPerfil'];?>'); color:#000;font-weight: bold; margin-left: 10px; border-radius: 50px; width:120px; height:120px;  background-repeat:no-repeat;  background-size:cover;"></a>
              <a><span class="name white-text"><?php echo $_SESSION['nombres']. " ".$_SESSION['apellidos'];?></span><i class="material-icons right green-text">adjust</i></a>
              </div>
          </center>  </li>
      <li><div class=" divider"></div></li>
      <li><a ><i class="material-icons left">person_pin_circle</i><?php echo $_SESSION['direccion'];?></a></li>
      <li><a><i class="material-icons left">contact_phone</i><?php echo $_SESSION['telefono'];?></a></li>
      <li><a><i class="material-icons left">schedule</i>Se unio: <?php echo $_SESSION['fechaIngreso'];?></a></li>
      <li><a href=""><i class=" material-icons left">border_color</i>Editar Información</a></li>
      <li><div class="divider"></div></li>
      <li><a href=""><i class="material-icons left">shopping_cart</i>Productos</a></li>
      <li><a href=""><i class="material-icons left">local_shipping</i>Pedidos</a></li>
      <li><a><i class=" material-icons left">new_releases</i>Ofertas</a></li>
      <li><a><i class=" material-icons left">people</i>Clientes</a></li>
      <li><a><i class=" material-icons left">account_balance</i>Ranking</a></li>
      <li><div class="divider"></div></li>
      <li><a><i class=" material-icons left">supervisor_account</i>Foro</a></li>
      <li><a><i class=" material-icons left">live_help</i> Ayuda</a></li>
      <li><a href="index.php?c=login&a=cerrarSesion&id=<?php echo $_SESSION['id_admin'];?>"><i class="material-icons left">track_changes</i>Salir</a></li>
      </ul>
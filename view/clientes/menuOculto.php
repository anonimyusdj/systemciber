 <ul class="side-nav black-text" id="perfil">
          <li><center>
              <div class=" user-view blue darken-2">
              <a class="btn tooltipped blue darken-4 circle responsive-img" data-position="bottom" data-delay="50" data-tooltip="<?php echo $_SESSION['nombres'];?>" style=" background-image: url('<?php echo $_SESSION['fotoPerfil'];?>'); color:#000;font-weight: bold; margin-left: 10px; border-radius: 50px; width:120px; height:120px;  background-repeat:no-repeat;  background-size:cover;"></a>
              <a><span class="name white-text"><?php echo $_SESSION['nombres']. " ".$_SESSION['apellidos'];?></span></a>
              </div>
          </center>  </li>
      <li><div class=" divider"></div></li>
      <li><a ><i style="color: #2196f3;" class="material-icons left">person_pin_circle</i><?php echo $_SESSION['direccion'];?></a></li>
      <li><a><i style="color: #2196f3;"  class="material-icons left">contact_phone</i><?php echo $_SESSION['telefono'];?></a></li>
      <li><a><i style="color: #2196f3;" class="material-icons left">schedule</i>Se unio: <?php echo $_SESSION['fechaIngreso'];?></a></li>
      <li><a  href=""><i style="color: #00b0ff;" class=" material-icons left">border_color</i>Editar Información</a></li>
      <li><div class="divider"></div></li>
      <li><a><i style="color: #0d47a1;" class=" material-icons left">shopping_cart</i>Productos</a></li>
      <li><ul class=" collapsible" data-collapsible="accordion">
              <li class="bold"><a class="collapsible-header waves-effect waves-teal"><i style="color: #0d47a1;" class="material-icons left">local_shipping</i>Pedidos</a></li>
          </ul></li>
      <li><a><i style="color: #0d47a1;" class=" material-icons left">new_releases</i>Ofertas</a></li>
      <li><a><i style="color: #0d47a1;"class=" material-icons left">loyalty</i>Productos Favoritos</a></li>
      <li><a><i style="color: #0d47a1;" class=" material-icons left">account_balance</i>Ranking</a></li>
      <li><div class="divider"></div></li>
      <li><a><i class="material-icons left black-text">people</i>Foro</a></li>
      <li><a><i class=" material-icons left blue-text">live_help</i> Ayuda</a></li>
      <li><a href="index.php?c=login&a=cerrarSesion&id=<?php echo $_SESSION['id_cliente'];?>"><i class="material-icons left red-text">track_changes</i>Salir</a></li>
      </ul>
<ul class="collapsible nav-wrapper" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i style="color: #0d47a1;" class=" material-icons left">shopping_cart</i>Pedidos</div>
      <div class="collapsible-body card bold"><a href="#" ><i class=" material-icons left">assignment</i>Ver Pedidos</a></div>
      <div class="collapsible-body card"><a href="#" ><i class=" material-icons left">assignment</i>Ver Pedidos</a></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>

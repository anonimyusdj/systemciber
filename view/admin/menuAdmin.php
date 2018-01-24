<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
    
    header("Location:index.php");
    
}  

?>
<nav class="nav-extended fixed blue darken-4">
    <div class="nav-wrapper fixed">
        <a class="btn tooltipped blue darken-4" data-position="bottom" data-delay="50" data-tooltip="PC Technology" style=" background-image: url('assets/multimedia/imagenesSistema/logofulblanco.png'); color:#000;font-weight: bold; margin-top: 5px; margin-left: 10px; border-radius: 10px; width:150px; height:60px;  background-repeat:no-repeat;  background-size:cover;"></a>
        
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
          
        <li><a class="btn tooltipped blue darken-4 circle responsive-img" data-position="bottom" data-delay="50" data-tooltip="<?php echo $_SESSION['nombres'];?>" style=" background-image: url('<?php echo $_SESSION['fotoPerfil'];?>'); color:#000;font-weight: bold; margin-top: 5px; margin-left: 10px; border-radius: 10px; width:60px; height:60px;  background-repeat:no-repeat;  background-size:cover;"></a></li>
        <li><a href="home" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Home"><i class="material-icons left">home</i></a></li>
        <li><a href="formularioRegistro" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mensajes"><i class="material-icons left">chat</i></a></li>
        <li><a href="formularioRegistro" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Notificaciones"><i class="material-icons left">notifications</i></a></li>
        <li><a href="formularioRegistro"><i class="material-icons left">find_in_page</i></a></li>
      </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      
     
     
    </div>
  </nav>
<!--juan agrego un helpers para redirigir la getUrl a la funcion -->
<?php 
    include_once '../lib/helpers.php';
?>
<!-- NAVIGATION -->
<nav class="navbar navbar">
  <!-- container -->
  <div class="container-fluid">
    <!-- responsive-nav -->
    <div id="responsive-nav">
      <!-- NAV -->
      <ul class="main-nav nav navbar-nav">
        <li class="active"><a href="index.php">Inicio</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Deporte Aéreo<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Paracaídismo</a></li>
            <li><a class="dropdown-item" href="#">Parapente</a></li>
            <li><a class="dropdown-item" href="#">Globo Aerostático</a></li>
            <li><a class="dropdown-item" href="#">Rapel Volado</a></li>
            <li><a class="dropdown-item" href="#">Aeroplano</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Deporte Terrestre<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Golf</a></li>
            <li><a class="dropdown-item" href="#">Tennis de Campo</a></li>
            <li><a class="dropdown-item" href="#">Boxeo</a></li>
            <li><a class="dropdown-item" href="#">Ping Pong</a></li>
            <li><a class="dropdown-item" href="#">Karate</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Deporte Acuático<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Surfeo</a></li>
            <li><a class="dropdown-item" href="#">Natación</a></li>
            <li><a class="dropdown-item" href="#">Waterpolo</a></li>
            <li><a class="dropdown-item" href="#">Buceo</a></li>
            <li><a class="dropdown-item" href="#">Kayak</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Deporte Grupal<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Fútbol</a></li>
            <li><a class="dropdown-item" href="#">Baloncesto</a></li>
            <li><a class="dropdown-item" href="#">Voleibol</a></li>
            <li><a class="dropdown-item" href="#">Béisbol</a></li>
            <li><a class="dropdown-item" href="#">Hockey</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Prendas Deportivas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Uniformes</a></li>
            <li><a class="dropdown-item" href="#">Busos</a></li>
            <li><a class="dropdown-item" href="#">Pantalones</a></li>
            <li><a class="dropdown-item" href="#">Zapatos</a></li>
            <li><a class="dropdown-item" href="#">Accesorios</a></li>
          </ul>
        </li>
        <!--juan agrego un boton para verificar que si funciona la factura -->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Factura<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo getUrl("Factura","Factura","getInsert");?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Factura","Factura","consult");?>">Consultar</a></li>
            <!-- <li><a class="dropdown-item" href="#">Pantalones</a></li>
            <li><a class="dropdown-item" href="#">Zapatos</a></li>
            <li><a class="dropdown-item" href="#">Accesorios</a></li> -->
          </ul>
        </li>
      </ul>
      <!-- /NAV -->
    </div>
    <!-- /responsive-nav -->
  </div>
  <!-- /container -->
</nav>
<!-- /NAVIGATION -->
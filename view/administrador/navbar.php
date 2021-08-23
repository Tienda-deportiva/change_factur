<!-- NAVIGATION -->
<nav class="navbar navbar">
  <div class="container-fluid">
    <!-- responsive-nav -->
    <div id="responsive-nav">
      <ul class="main-nav nav navbar-nav">
        <li class="active"><a href="index.php">Inicio</a></li>
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo getUrl("Categoria","Categoria","getInsert"); ?>">Registrar Categoria</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Categoria","Categoria","consult"); ?>">Consultar Categoria</a></li>
          </ul>
        </li>
    
        <!--Maria-->
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Proveedores<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo getUrl("Proveedores","Proveedores","getInsert"); ?>">Registrar Proveedor</a></li>
            <li><a href="<?php echo getUrl("Proveedores","Proveedores","consult"); ?>">Consultar Proveedores</a></li>
          </ul>
        </li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Inventario<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo getUrl("Inventario","Inventario","getInsert"); ?>">Registrar</a></li>
            <li><a href="<?php echo getUrl("Inventario","Inventario","consult"); ?>">Consultar</a></li>
          </ul>
        </li>
             <!--Maria-->
        <!--Yecid-->
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <p>Usuarios</p>
              <li><a href="<?php echo getUrl("Usuarios","Usuarios","getInsert")?>">Registar</a></li>
              <li><a href="<?php echo getUrl("Usuarios","Usuarios","consult")?>">Consultar</a></li>
            <hr>
            <p>roles</p>
              <li><a href="<?php echo getUrl("Roles","Roles","getInsert")?>">Registar</a></li>
              <li><a href="<?php echo getUrl("Roles","Roles","consult")?>">Consultar</a></li>
            <hr>
            <p>Clientes</p>
              <li><a href="<?php echo getUrl("Usuarios","Usuarios","getInsert")?>">Registar</a></li>
              <li><a href="<?php echo getUrl("Usuarios","Usuarios","consult")?>">Consultar</a></li>
            <hr>
              <li><a href="<?php echo getUrl("Acceso","Acceso","logout")?>" >Cerrar Sesion</a></li>
          </ul>
        <!--/yecid-->
      </ul>
  </div>    
</nav>
<!-- /NAVIGATION -->
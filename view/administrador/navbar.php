<!-- NAVIGATION -->
<div class="container">
  <nav class="navbar navbar">
    <div class="container-fluid">
      <!-- responsive-nav -->
      <div id="responsive-nav">
        <ul class="main-nav nav navbar-nav">
          <li class="active"><a href="index.php">Inicio</a></li>
          
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo getUrl("Categoria","Categoria","getInsert",false,"administrador"); ?>">Registrar Categoria</a></li>
              <li><a class="dropdown-item" href="<?php echo getUrl("Categoria","Categoria","consult",false,"administrador"); ?>">Consultar Categoria</a></li>
            </ul>
          </li>
      
          <!--Maria-->
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Proveedores<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo getUrl("Proveedores","Proveedores","getInsert",false,"administrador"); ?>">Registrar Proveedor</a></li>
              <li><a href="<?php echo getUrl("Proveedores","Proveedores","consult",false,"administrador"); ?>">Consultar Proveedores</a></li>
            </ul>
          </li>

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Inventario<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo getUrl("Inventario","Inventario","getInsert",false,"administrador"); ?>">Registrar</a></li>
              <li><a href="<?php echo getUrl("Inventario","Inventario","consult",false,"administrador"); ?>">Consultar</a></li>
            </ul>
          </li>
              <!--Maria-->
          <!--Yecid-->
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo getUrl("Usuarios","Usuarios","getInsert",false,"administrador")?>">Registrar</a></li>
                <li><a href="<?php echo getUrl("Usuarios","Usuarios","consult",false,"administrador")?>">Consultar</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Roles<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo getUrl("Roles","Roles","getInsert",false,"administrador")?>">Registar</a></li>
                <li><a href="<?php echo getUrl("Roles","Roles","consult",false,"administrador")?>">Consultar</a></li>
            </ul>
          </li>
          <!--Yecid-->
          <!--Juan David-->
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Factura<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo getUrl("Factura","Factura","getInsert",false,"administrador")?>">Registar</a></li>
                <li><a href="<?php echo getUrl("Factura","Factura","consult",false,"administrador")?>">Consultar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>    
  </nav>
</div>
<!-- /NAVIGATION -->
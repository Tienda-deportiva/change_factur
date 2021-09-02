<div class="container">
  <div class="jumbotron">
    <h1>Usuarios</h1>
  </div>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>cod</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>E-mail</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Rol</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($usu=mysqli_fetch_assoc($usuarios)) {
          echo "<tr>";
            echo "<td>".$usu['cod_user']."</td>";
            echo "<td>".$usu['nom_user']."</td>";
            echo "<td>".$usu['ape_user']."</td>";
            echo "<td>".$usu['corr_user']."</td>";
            echo "<td>".$usu['login_user']."</td>";
            echo "<td>".$usu['pass_user']."</td>";
            echo "<td>".$usu['nom_rol']."</td>";
            echo "<td><a href='".getUrl("Usuarios","Usuarios","getUpdate",array("cod_user"=>$usu['cod_user']))."'><button class='btn btn-success'>Editar</button></a></td>";
            echo "<td><a href='".getUrl("Usuarios","Usuarios","getDelete",array("cod_user"=>$usu['cod_user']))."'><button class='btn btn-danger'>Eliminar</button></a></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<div class="container">
  <div class="jumbotron">
    <h1>Roles</h1>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Rol</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($rol=mysqli_fetch_assoc($roles)) {
          echo "<tr>";
            echo "<td>".$rol['nom_rol']."</td>";
            echo "<td><a href='".getUrl("Roles","Roles","getUpdate",array("cod_rol"=>$rol['cod_rol']))."'><button class='btn btn-success'>Editar</button></a></td>";
            echo "<td><a href='".getUrl("Roles","Roles","getDelete",array("cod_rol"=>$rol['cod_rol']))."'><button class='btn btn-danger'>Eliminar</button></a></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>
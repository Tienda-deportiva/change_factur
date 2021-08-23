
<div class="container">

<table class="table table-hover table-striped">

    <tr>
        <th>ID</th>        
        <th>Proveedor</th>
        <th>N° Nit</th>
        <th>Direccion</th>
        <th>N° Telefono</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
</div>

<?php

while($prov=mysqli_fetch_assoc($proveedor)){
    echo "<tr>";
    echo "<td>".$prov['cod_prov']."</td>";
    echo "<td>".$prov['razon_prov']."</td>";
    echo "<td>".$prov['nit_prov']."</td>";
    echo "<td>".$prov['dir_prov']."</td>";
    echo "<td>".$prov['tel_prov']."</td>";
    echo "<td><a href='".getUrl("Proveedores","Proveedores","getUpdate",array
    ("cod_prov"=>$prov['cod_prov']))."'><button class='btn btn-success'>Editar</button></a></td>";
    echo "<td><a href='".getUrl("Proveedores","Proveedores","getDelete",array
    ("cod_prov"=>$prov['cod_prov']))."'><button class='btn btn-danger'>ELiminar</button></a></td>";
    echo "</tr>";
}
?>
</table>

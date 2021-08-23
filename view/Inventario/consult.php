<div class="container"><br><br><br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Id Inv</th>
            <th>Id Prod</th>
            <th>Producto</th>
            <th>Costo</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Descarga</th>
            
            <th>Proveedor</th>
            <th>Categoria</th>
            <th>Imagen</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        <?php
            while ($inv=mysqli_fetch_assoc($inventarios)) {
                echo "<tr>";
                    echo "<td>".$inv['cod_inv']."</td>";
                    echo "<td>".$inv['cod_prod_inv']."</td>";
                    echo "<td>".$inv['nom_prod_inv']."</td>";
                    echo "<td>".$inv['costo_prod_inv']."</td>";
                    echo "<td>".$inv['precio_prod_inv']."</td>";
                    echo "<td>".$inv['desc_prod_inv']."</td>";
                    echo "<td>".$inv['cant_prod_inv']."</td>";
                    echo "<td>".$inv['cant_desc_prod_inv']."</td>";
                    echo "<td>".$inv['razon_prov']."</td>";
                    echo "<td>".$inv['nom_categ']."</td>";
                    echo "<td><img src='".$inv['img_prod_inv']."' width='80px'></td>";
                    echo "<td><a href='".getUrl("Inventario","Inventario","getUpdate",array("cod_inv"=>$inv['cod_inv']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td><a href='".getUrl("Inventario","Inventario","getDelete",array("cod_inv"=>$inv['cod_inv']))."'><button class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>
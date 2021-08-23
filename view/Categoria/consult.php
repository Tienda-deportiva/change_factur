<table class="mt-5 table table-hover table-striped">
    <tr>
        <th>Código</th>
        <th>Categoría</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php
        while ($cat=mysqli_fetch_assoc($categorias)) {
            echo "<tr>";
                echo "<td>".$cat['cod_categ']."</td>";
                echo "<td>".$cat['nom_categ']."</td>";
                echo "<td><a href='".getUrl("Categoria","Categoria","getUpdate",
                    array("cod_categ"=>$cat['cod_categ']))."'><button class='btn btn-primary'>Editar</button></td>";
                echo "<td><a href='".getUrl("Categoria","Categoria","getDelete",
                    array("cod_categ"=>$cat['cod_categ']))."'><button class='btn btn-danger'>Eliminar</button></td>";            
            echo "</tr>";
        }
    ?>
</table>
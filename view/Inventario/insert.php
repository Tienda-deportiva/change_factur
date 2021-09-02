<div class="jumbotron">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-5">
    <br><br><h3>Registar en el Inventario</h3> <br><br>
   
    </div>
</div>
    <form action="<?php echo getUrl("Inventario","Inventario","postInsert",false,"administrador");?>" method="post"
    enctype="multipart/form-data">
        <div class="mt-4 row">
            <div class="form-group col-md-4">
                <label>Producto</label>
                  <input type="text" name="nom_prod_inv" class="form-control" placeholder=" Nombre del Producto">
            </div>

            <div class="form-group col-md-4">
                 <label>Costo</label>
                  <input type="text" name="costo_prod_inv" class="form-control" placeholder="Costo del Producto">
            </div>

            <div class="form-group col-md-4">
                <label>Precio</label>
                 <input type="text" name="precio_prod_inv" class="form-control" placeholder="Precio del Producto">
            </div>

            <div class="form-group col-md-4">
                 <label>Descripción</label>
                 <input type="text" name="desc_prod_inv" class="form-control" placeholder="Descripcion del Producto">
            </div>

            <div class="form-group col-md-4">
                 <label>Cantidad Producto</label>
                  <input type="text" name="cant_prod_inv" class="form-control" placeholder="Cantidad del Producto">
            </div> 

            <div class="form-group col-md-4">
                <label>Descarga</label>
                 <input type="text" name="cant_desc_prod_inv" class="form-control" placeholder="Cantidad descarga">
            </div> 

            <div class="form-group col-md-4">
                <label>Proveedor</label>
                    <select name="cod_prov" class="form-control">
                        <option value="">Seleccione...</option>
                            <?php
                                while($prov=mysqli_fetch_assoc($proveedor)){
                                    echo "<option value='".$prov['cod_prov']."'>".$prov['razon_prov']."</option>";
                                    }
                            ?>
                    </select>
            </div>

            <div class="form-group col-md-4">
                <label>Categoria</label>
                    <select name="cod_categ" class="form-control">
                        <option value="">Seleccione...</option>-->
                            <?php
                                while($categ=mysqli_fetch_assoc($categorias)){
                                    echo "<option value='".$categ['cod_categ']."'>".$categ['nom_categ']."</option>";
                                    }
                            ?>
                    </select>
            </div><br><br>

            <div class="form-group col-md-4">
                <label>Imagen Producto</label>
                <input type="file" name="img_prod_inv">
            </div>
            
        </div>
        <div class="mt-4 row"><br><br>
            <div class="form-group col-md-4">
                <input type="submit" value="Enviar al Inventario" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

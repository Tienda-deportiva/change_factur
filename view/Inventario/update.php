<div class="jumbotron">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-5"><br><br>
                <h3>Editar Inventario</h3><br><br>
            </div>
        </div>
        <?php
            while($inv=mysqli_fetch_assoc($inventario)) {
        ?>
            <form action="<?php echo getUrl("Inventario","Inventario","postUpdate");?>" method="post">
                <div class="row">
                    <div class="container">
                        <div class="form-group col-md-2">
                            <label>Producto</label>
                            <input type="hidden" name="cod_inv" value="<?php echo $inv['cod_inv'];?>">
                            <input type="hidden" name="cod_prod_inv" value="<?php echo $inv['cod_prod_inv'];?>">
                            <input type="text" name="nom_prod_inv" class="form-control" value="<?php echo $inv['nom_prod_inv']; ?>">
                        </div>
        
                        <div class="form-group col-md-2">
                            <label>Costo</label>
                            <input type="hidden" name="cod_inv" value="<?php echo $inv['cod_inv'];?>">
                            <input type="text" name="costo_prod_inv" class="form-control" value="<?php echo $inv['costo_prod_inv']; ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label>Precio</label>
                            <input type="hidden" name="cod_inv" value="<?php echo $inv['cod_inv'];?>">
                            <input type="text" name="precio_prod_inv" class="form-control" value="<?php echo $inv
                            ['precio_prod_inv']; ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label>Descripcion</label>
                            <input type="hidden" name="cod_inv" value="<?php echo $inv['cod_inv'];?>">
                            <input type="text" name="desc_prod_inv" class="form-control" value="<?php echo $inv['desc_prod_inv']; ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label>Cantidad</label>
                            <input type="hidden" name="cod_inv" value="<?php echo $inv['cod_inv'];?>">
                            <input type="text" name="cant_prod_inv" class="form-control" value="<?php echo $inv['cant_prod_inv']; ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label>Proveedor</label>
                            <select name="cod_prov" class="form-control">
                                <?php
                                    while($prov=mysqli_fetch_assoc($proveedor)){
                                        if ($prov['cod_prov']==$inv['cod_prov']) {
                                            echo "<option value='".$prov['cod_prov']."' selected>".$prov['razon_prov']."</option>";
                                        }else{
                                            echo "<option value='".$prov['cod_prov']."'>".$prov['razon_prov']."</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label>Categoria</label>
                            <select name="cod_categ" class="form-control">
                                <?php
                                    while($cat=mysqli_fetch_assoc($categorias)){
                                        if ($cat['cod_categ']==$inv['cod_categ']) {
                                            echo "<option value='".$cat['cod_categ']."' selected>".$cat['nom_categ']."</option>";
                                        }else{
                                            echo "<option value='".$cat['cod_categ']."'>".$cat['nom_categ']."</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div><br>
                        
                        <div class="form-group col-md-4">
                            <label>Imagen Producto</label>
                            <input type="hidden" name="img_prod_inv" value="<?php echo $inv['img_prod_inv'];?>">
                            <input type="file" name="img_prod_inv" class="form-control" value="<?php echo $inv['img_prod_inv']; ?>">
                        </div>
                        
                        <div class="mt-4 row"><br><br><br><br>
                            <div class="form-group col-md-4">
                                <input type="submit" value="Guardar Cambios" class="btn btn-primary">
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        <?php
            }
        ?>
    </div>
</div>


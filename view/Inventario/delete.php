<div class="jumbotron mt-4">
    <h3>Eliminar Datos del Inventario</h3>
</div>
<?php
while($inv=mysqli_fetch_assoc($inventario)){
?>
<form action="<?php echo getUrl("Inventario","Inventario","postDelete");?>" method="post">
<div class="row mt-4">
    <div class="col-md-4">
        <label>ID Inventario</label> 
        <input type="text" name="cod_inv" readonly value="<?php echo $inv['cod_inv'];
         ?>"class="form-control">
    </div>

    <div class="col-md-4">
        <label>Producto</label>
        <input type="hidden" name="cod_prod_inv" value="<?php echo $inv['cod_prod_inv'];?>">
        <input type="text" name="nom_prod_inv" readonly value="<?php echo $inv['nom_prod_inv'];
         ?>"class="form-control">
    </div>

    <div class="col-md-2">
        <label>Costo</label>
        <input type="text" name="costo_prod_inv" readonly value="<?php echo $inv['costo_prod_inv'];
         ?>"class="form-control">
    </div>

    <div class="col-md-2">
        <label>Precio</label>
        <input type="text" name="precio_prod_inv" readonly value="<?php echo $inv['precio_prod_inv'];
         ?>"class="form-control">
    </div>

    <div class="col-md-4">
        <label>Descripcion</label>
        <input type="text" name="desc_prod_inv" readonly value="<?php echo $inv['desc_prod_inv'];
         ?>"class="form-control">
    </div>

    <div class="col-md-4">
        <label>Cantidad</label>
        <input type="text" name="cant_prod_inv" readonly value="<?php echo $inv['cant_prod_inv'];
         ?>"class="form-control">
    </div>

    <div class="col-md-4">
        <label>Descarga</label>
        <input type="text" name="cant_desc_prod_inv" readonly value="<?php echo $inv['cant_desc_prod_inv'];
         ?>"class="form-control">
    </div>


<div class="col-md-4">
    <label>Proveedor</label>
    <select name="cod_prov" class="form-control" readonly value="<?php echo $prov['razon_prov'];?>">
        <?php
        while($prov=mysqli_fetch_assoc($proveedor)){
            if ($prov['cod_prov']==$inv['cod_prov']) {
            echo "<option  value='".$prov['cod_prov']."' selected>".$prov['razon_prov']."</option>";
        }else{
           // echo "<option value='".$prov['cod_prov']."'>".$prov['razon_prov']."</option>";//
        }
    }
    ?>
    </select>
</div>
<div class="col-md-4">
    <label>Categoria</label>
    <select name="cod_categ" class="form-control" readonly value="<?php echo $categ['nom_categ'];?>">
        <?php
        while($categ=mysqli_fetch_assoc($categorias)){
            if ($categ['cod_categ']==$inv['cod_categ']) {
            echo "<option  value='".$categ['cod_categ']."' selected>".$categ['nom_categ']."</option>";
        }else{
           
        }
    }
    ?>
    </select>
</div>
</div>
<br>
<div class="col-md-4">
    <p>¿Está seguro de eliminar estos Datos?</p>
    <input type="submit" value="Confirmar" class="btn btn-danger">
    <a href="<?php echo getUrl("Inventario","Inventario","consult") ?>"><button 
    type="button" class="btn btn-primary">Cancelar</button></a>
</div>
</div>
</form>
<?php
}
?>
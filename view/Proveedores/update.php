<div class="jumbotron">
<div class="container-fluid">
<div class="container">
<div class="col-md-5">
    <br><br>
         <h3>Editar Proveedor</h3>
    <br><br>
</div>
</div>
        <?php
             while($prov=mysqli_fetch_assoc($proveedores)){
        ?>

<form action="<?php echo getUrl("Proveedores","Proveedores","postUpdate",false,"administrador");?>
"method="post">

<div class="container">

<div class="form-group col-md-2">
        <label>Proveedor</label>
        <input type="hidden" name="cod_prov" value="<?php echo 
        $prov['cod_prov'];?>">
        <input type="text" name="razon_prov" value="<?php echo 
        $prov['razon_prov']; ?>"class="form-control">
    </div>

<form action="<?php echo getUrl("Proveedores","Proveedores","postUpdate");?>
"method="post">

<div class="form-group col-md-2">
        <label>Nit</label>
        <input type="hidden" name="cod_prov" value="<?php echo 
        $prov['cod_prov'];?>">
        <input type="text" name="nit_prov" value="<?php echo
         $prov['nit_prov']; ?>"class="form-control">
    </div>

<form action="<?php echo getUrl("Proveedores","Proveedores","postUpdate");?>
"method="post">

<div class="form-group col-md-2">
        <label>Direccion</label>
        <input type="hidden" name="cod_prov" value="<?php echo $prov['cod_prov'];?>">
        <input type="text" name="dir_prov" value="<?php echo $prov['dir_prov']; ?>"class="form-control">
    </div>

<form action="<?php echo getUrl("Proveedores","Proveedores","postUpdate");?>
"method="post">

<div class="form-group col-md-2">
        <label>Telefono</label>
        <input type="hidden" name="cod_prov" value="<?php echo 
        $prov['cod_prov'];?>">
        <input type="text" name="tel_prov" value="<?php echo 
        $prov['tel_prov']; ?>"class="form-control">
    </div>

<form action="<?php echo getUrl("Proveedores","Proveedores","postUpdate");?>
" method="post">

<div class="form-group col-md-2">
        <label>Desc Producto</label>
        <input type="hidden" name="cod_prov" value="<?php echo
         $prov['cod_prov'];?>">
    </div>
    <div class="container">
<div class="row mt-2">
<div class="col-md-4">
    <input type="submit" value="Guardar" class="btn btn-primary">
    </div>
</div>
</div>
</div>
</div>
</div>
             </div>
</form>
</form>
</form>
</form>
</form>
<?php
}
?>
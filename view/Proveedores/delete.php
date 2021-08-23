<div class="jumbotron">
<div class="container-fluid">
<div class="container">
    <div class="col-md-5">
        <br><br>
    <h3>Eliminar Proveedor</h3>
    <br><br>
</div>
</div>
<?php
while($prov=mysqli_fetch_assoc($proveedores)){
?>
<div class="container">

<form action="<?php echo getUrl("Proveedores","Proveedores","postDelete");?>" method="post">

<div class="form-group col-md-2">
        <label>Proveedor</label>
        <input type="hidden" name="cod_prov" value="<?php echo $prov['cod_prov'];?>">
        <input type="text" name="razon_prov" readonly value="<?php echo $prov['razon_prov'];
         ?>"class="form-control">
    </div>


<form action="<?php echo getUrl("Proveedores","Proveedores","postDelete");?>" method="post">

   <div class="form-group col-md-2">
        <label>Nit</label>
        <input type="hidden" name="cod_prov" value="<?php echo $prov['cod_prov'];?>">
        <input type="text" name="nit_prov" readonly value="<?php echo $prov['nit_prov'];
         ?>"class="form-control">
    </div>


<form action="<?php echo getUrl("Proveedores","Proveedores","postDelete");?>" method="post">

<div class="form-group col-md-2">
        <label>Direccion</label>
        <input type="hidden" name="cod_prov" value="<?php echo $prov['cod_prov'];?>">
        <input type="text" name="dir_prov" readonly value="<?php echo $prov['dir_prov'];
         ?>"class="form-control">
    </div>


<form action="<?php echo getUrl("Proveedores","Proveedores","postDelete");?>" method="post">

<div class="form-group col-md-2">
        <label>Telefono</label>
        <input type="hidden" name="cod_prov" value="<?php echo $prov['cod_prov'];?>">
        <input type="text" name="tel_prov" readonly value="<?php echo $prov['tel_prov'];
         ?>"class="form-control">
    </div>


<form action="<?php echo getUrl("Proveedores","Proveedores","postDelete");?>" method="post">

</div>
<div class="container">
<div class="container">
<br>
<p>¿Está seguro de eliminar estos Datos?</p>
<div class="row mt-4">
<div class="col-md-4">
<br>
    <input type="submit" value="Confirmar" class="btn btn-danger">
    <a href="<?php echo getUrl("Proveedores","Proveedores","consult") ?>"><button 
    type="button" class="btn btn-primary">Cancelar</button></a>
</div>
</div>
</div>
</div>
</div>
</form>
</form>
</form>
</form>
<?php
}
?>
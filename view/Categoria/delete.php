<div class="jumbotron bg-primary p-5 rounded-lg m-3">
    <h3 class="display-4 p-5">Eliminar Categoria</h3>
</div>
<?php
    while ($cat=mysqli_fetch_assoc($categoria)) {
?>
<form action="<?php echo getUrl("Categoria","Categoria","postDelete",false,"administrador"); ?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label>Categoria</label>
            <input type="hidden" name="cod_categ" value="<?php echo $cat['cod_categ']; ?>">
            <input type="text" name="nom_categ" readonly value= "<?php echo $cat['nom_categ']; ?>" 
            class="form-control">
            <!--readonly es para que el texto se bloquee y no se pueda modificar-->
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <p>¿Está seguro de eliminar la categoria?</p>
            <input type="submit" value="Confirmar" class="btn btn-danger">
            <a href="<?php echo getUrl("Categoria","Categoria","consult") ?>">
            <button type="button" class="btn btn-primary">Cancelar</button></a>
        </div>
    </div>
</form>
<?php
}
?>
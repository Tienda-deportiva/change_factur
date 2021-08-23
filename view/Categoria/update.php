<div class="jumbotron bg-primary p-5 rounded-lg m-3">
    <h3 class="display-4 p-5">Editar Categoria</h3>

</div>
<?php
    while ($cat=mysqli_fetch_assoc($categoria)) {
?>
<form action="<?php echo getUrl("Categoria","Categoria","postUpdate"); ?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label>Categoria</label>
            <input type="hidden" name="cod_categ" value="<?php echo $cat['cod_categ']; ?>">
            <input type="text" name="nom_categ" value= "<?php echo $cat['nom_categ']; ?>" class="form-control">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>
<?php
}
?>
<div class="jumbotron bg-primary p-5 rounded-lg m-3">
    <h3 class="display-4 p-5">Registrar Categoria</h3>
</div>
<form action="<?php echo getUrl("Categoria","Categoria","postInsert"); ?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label>Categoria</label>
            <input type="text" name="nom_categ" class="form-control">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>
<div class="container">
    <div class="jumbotron">
        <h3>Eliminar Rol</h3>
    </div>
    <?php 
        while($rl=mysqli_fetch_assoc($rol)){
    ?>
        <form action="<?php echo getUrl("Roles","Roles","postDelete",false,"administrador") ?>" method="post">
            <div class="row">
                <div class="col-md-2">
                    <label>Rol</label>
                    <input type="hidden" name="cod_rol" value="<?php echo $rl['cod_rol'];?>">
                    <input type="text" name="nom_rol" class="form-control" value="<?php echo $rl['nom_rol'];?>">
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <p>¿Estas seguro de eliminar el rol?</p>
                    <input type="submit" value="Confirmar" class="btn btn-danger">
                    <a href="<?php echo getUrl("Roles","Roles","consult")?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
                </div>
            </div>    
        </form>
    <?php 
        }
    ?>
</div>

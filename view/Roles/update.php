<div class="container">
    <div class="jumbotron">
        <h3>Editar Rol</h3>
    </div>
    <?php 
        while($rl=mysqli_fetch_assoc($rol)){
    ?>
        <form action="<?php echo getUrl("Roles","Roles","postUpdate",false,"administrador") ?>" method="post">
            <div class="row">
                <div class="col-md-2">
                    <label>Rol</label>
                    <input type="hidden" name="cod_rol" value="<?php echo $rl['cod_rol'];?>">
                    <input type="text" name="nom_rol" class="form-control" value="<?php echo $rl['nom_rol'];?>">
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <input type="submit" value="Editar" class="btn btn-success" style="margin:10px 0;">
                </div>
            </div>    
        </form>
    <?php 
        }
    ?>
</div>

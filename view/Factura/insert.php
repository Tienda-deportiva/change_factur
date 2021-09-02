<div class="container">
    <div class="jumbotron m-3 mt-3">
        <h3>Registrar Factura</h3>
        <form action="<?php echo getUrl("Factura","Factura","postInsert");?>" method="post">
            <div class="row">
                <!-- <div class="form-group col-md-4">
                    <label for="">Fecha</label>
                    <input type="date" name="fecha_fact" id="" class="form-control">
                </div> -->
                <div class="form-group col-md-4">
                    <input type="hidden" name="cod_user" value="<?php echo $_SESSION['id'];?>">
                    <label for="">Nombre</label>
                    <input type="text" name="nom_user" readonly class="form-control" value="<?php echo$_SESSION['nombre'];?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Apellido</label>
                    <input type="text" name="ape_user" readonly class="form-control" value="<?php echo $_SESSION['apellido'];?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Dirección</label>
                    <input type="text" name="dir_user" class="form-control" value="<?php echo $_SESSION['direccion'];?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Telefono</label>
                    <input type="text" name="tel_user" class="form-control" value="<?php echo $_SESSION['telefono'];?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-pull-4" style="margin-left: 40px;">
                    <input type="submit" value="Registrar" class="btn btn-success col-md-3">
                </div>
            </div>
        </form>
    </div>
</div>
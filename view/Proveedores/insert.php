<div class="jumbotron">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-5"><br><br>
                <h3>Registar Proveedor</h3><br><br>
            </div>
        </div>
        <form action="<?php echo getUrl("Proveedores","Proveedores","postInsert",false,"administrador");?>" method="post">
            <div class="container">
                <div class="form-group col-md-2">
                    <label>Proveedor</label>
                    <input type="text" name="razon_prov" class="form-control" placeholder="Proveedor">
                </div>

                <div class="form-group col-md-2">
                    <label>N° Nit</label>
                    <input type="text" name="nit_prov" class="form-control"placeholder="Nit">
                </div>
                
                <div class="form-group col-md-2">
                    <label>Direccion</label>
                    <input type="text" name="dir_prov" class="form-control"placeholder=
                    "Direccion">
                </div>
                
                <div class="form-group col-md-2">
                    <label>N° Telefono</label>
                    <input type="text" name="tel_prov" class="form-control"placeholder=
                    "Telefono">
                </div>
                <div class="container">
                    <div class="container">
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <input type="submit" value="Guardar Registro" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>

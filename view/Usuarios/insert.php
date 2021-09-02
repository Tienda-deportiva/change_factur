<body> 
    <div class="container">
        <div class="jumbotron"><br><br>
            <h3>Registrar Usuario</h3> <br><br>
            <div class="form-group">
                <form action="<?php echo getUrl("Usuarios","Usuarios","postInsert",false)?>" method="post">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Numero de documento</label>
                            <input type="number" name="doc_user" class="form-control" placeholder="Documento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Nombres</label>
                            <input type="hidden" name="cod_rol">
                            <input type="text" name="nom_user" id="nombres" class='form-control' maxlength="100" required placeholder="Nombres" >
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Apellidos</label>
                            <input type="text" name="ape_user" id="apellidos" class='form-control' maxlength="100" required placeholder="Apellidos">
                        </div>
                
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Direccion</label>
                            <input type="text" name="dir_user" class='form-control' placeholder="Direccion">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>telefono</label>
                            <input type="number" name="tel_user" class='form-control' placeholder="Numero telefonico">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Correo Electronico</label>
                            <input type="email" name="corr_user" id="correo_electronico" class='form-control' maxlength="64" required placeholder="Correo Electronico:">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nombre de usuario</label>
                            <input type="text" name="login_user" class="form-control" placeholder="Nombre de usuario">
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Contraseña</label>
                            <input type="password" name="pass_user" class="form-control" placeholder="Contraseña">
                        </div>
                        <!-- <div class="col-md-6">
                            <label>Verificar contraseña</label>
                            <input type="password" name="passw_user" class="form-control" id="">
                        </div> -->
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>Rol</label>
                                <select class="form-control" id="sel1" name="cod_rol">
                                    <?php 
                                        while ($rol=mysqli_fetch_assoc($roles)) {
                                            echo "<option value='".$rol['cod_rol']."'>".$rol['nom_rol']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                
                    <div class="row boton">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success btn-block">Registrar usuario</button>
                        </div>
                    </div>
                
                </form>
            </div>  
        </div>
    </div>     
</body>
    

                    
<div class="container">
    <div class="jumbotron"><br><br>
        <h3>Editar usuarios</h3><br><br>
    
        <div class="form-group">
            <?php 
                while($user=mysqli_fetch_assoc($usuario)){
            ?>
                <form action="<?php echo getUrl("Usuarios","Usuarios","postUpdate",false,"ajax")?>" method="post">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label >Documento</label>
                            <input type="number" name="doc_user" class="form-control" placeholder="Ingrese su documento" value="<?php echo $user['doc_user'];?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Nombres:</label>
                            <input type="hidden" name="cod_user" value="<?php echo $user['cod_user']; ?>">
                            <input type="text" name="nom_user" id="nombres" class='form-control' value="<?php echo $user['nom_user'];?>" maxlength="100" required >
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Apellidos:</label>
                            <input type="text" name="ape_user" id="apellidos" class='form-control' value="<?php echo $user['ape_user'];?>" maxlength="100" required >
                        </div>                
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Direccion</label>
                            <input type="text" name="dir_user" class='form-control' placeholder="Direccion" value="<?php echo $user['dir_user'];?>">
                        </div>
                        <div class="col-md-4 form-group">
                            <label >telefono</label>
                            <input type="number" name="tel_user" class='form-control' placeholder="Numero telefonico" value="<?php echo $user['tel_user'];?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Correo electrónico:</label>
                            <input type="email" name="corr_user" id="correo_electronico" value="<?php echo $user['corr_user'];?>"class='form-control' maxlength="64" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nombre de usuario</label>
                            <input type="text" name="login_user" value="<?php echo $user['login_user'];?>" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Contraseña</label>
                            <input type="password" name="pass_user" value="<?php echo $user['pass_user'];?>" class="form-control">
                        </div>
                        <div class="col-md-4 form-group">
                            <div class="form-group">
                                <label for="sel1">rol</label>
                                <select class="form-control" id="sel1" name="cod_rol">
                                    <?php 
                                        while ($rol=mysqli_fetch_assoc($roles)) {

                                            if ($rol['cod_rol']==$user['cod_rol']) {
                                                echo "<option value='".$rol['cod_rol']."' selected>".$rol['nom_rol']."</option>";
                                            }else{
                                                echo "<option value='".$rol['cod_rol']."'>".$rol['nom_rol']."</option>";
                                            }
                                            
                                        }
                                    ?>
                                </select>                          
                            </div>
                        </div>
                    </div>
                    <div class="row boton">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success btn-block" style="margin: 20px 0;">Editar</button>
                        </div>
                    </div>
                </form>
            <?php 
            }
            ?>
        </div>
    </div>
</div>     
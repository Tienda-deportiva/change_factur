<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        
        <style>
            .form{
                width:45%;
                height: 85vh;
                margin:auto;
                background-color: #15161D;
                border-radius: 10px;
                padding: 20px;	
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }

            .table-title h2 {
                margin: 6px 0 0;
                font-size: 20px;
            }
            h1,label{
                color: white;
                text-align: center;
                font-family: inherit;
            }

        </style>
    </head>
    <body>  
        <div class="container">
            <div class="form form-group">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Resgistrate</h1>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-link"><span  style="color: red;">&laquo;<a href="index.php" style="color: red;">volver al inicio</a></span></button>
                    </div> 
                </div>
                <form action="<?php echo getUrl("Usuarios","Usuarios","signup",false,"ajax")?>" method="post">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Numero de documento</label>
                            <input type="number" name="doc_user" class="form-control" placeholder="Ingrese su documento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nombres</label>
                            <input type="hidden" name="cod_rol">
                            <input type="text" name="nom_user" id="nombres" class='form-control' maxlength="100" required placeholder="Nombres" >
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Apellidos</label>
                            <input type="text" name="ape_user" id="apellidos" class='form-control' maxlength="100" required placeholder="Apellidos">
                        </div>
                
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Direccion</label>
                            <input type="text" name="dir_user" class='form-control' placeholder="Direccion">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>telefono</label>
                            <input type="number" name="tel_user" class='form-control' placeholder="Numero telefonico">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Correo Electronico</label>
                            <input type="email" name="corr_user" id="correo_electronico" class='form-control' maxlength="64" required placeholder="Correo Electronico:">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Nombre de usuario</label>
                            <input type="text" name="login_user" class="form-control" placeholder="Nombre de usuario">
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Contraseña</label>
                            <input type="password" name="pass_user" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="col-md-6">
                            <label>Confirmar contraseña</label>
                            <input type="password" name="passw_user" class="form-control"  placeholder="Confirmar contraseña">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-danger btn-blok">Registrarme</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </body>
</html>         

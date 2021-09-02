<!DOCTYPE html>
  <html >
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <link rel="stylesheet" href="css/login.css"> -->
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <title>Login</title>
      <style>
        .login-control{
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }
        .formulario-login{
          background-color: #15161D;
          width: 25vw;
          height: 70vh;
          border-radius: 5px;
        }
        h2{
          margin-bottom:10px;
        }
        .logo {
          width: 45%;
          height: 20vh;
          text-align: center;
          margin: 20px auto;
        }

        .logo img {
          width: 100%;
          height: 100%;
          border-radius: 50%;
        }
      
        label, span,a{
          color: #fff;
        }
        a:hover{
          color: red;
        }
      </style>
    </head>
    <body>
      <div class="container-fluid login-control">
        <div class="row">
          <div class="col-md-6 formulario-login">
            <div class="formulario">
              <form action="<?php echo getUrl("Acceso","Acceso","login",false,"")?>" method="post">
                <div class="logo form-group">
                  <img src="img/login/user.png" alt="logo">
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label><b>Usuario o Correo</b></label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user" style="color:red;"></i></span>
                      <input id="email" type="text" class="form-control" name="user" placeholder="Ingrese su usuario o correo">
                    </div>
                  </div>
                  <div class="form-group">
                    <label><b>Password</b></label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-unlock" style="color:red;"></i></span> 
                      <input type="password"  class="form-control" placeholder="Ingrese su contraseña" name="clave" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Ingresar" class="btn btn-danger btn-block">
                  </div>  
                </div>
                <div class="form-group">
                  <span class="psw">¿No tienes cuenta? <a href="signup.php">Registrarme</a></span>
                </div>
              </form>
            </div> 
          </div>
        </div>
      </div>
    </body>
  </html>
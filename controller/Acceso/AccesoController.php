<?php 
    include_once '../model/Acceso/AccesoModel.php';

    class AccesoController{
        public function login(){
            $obj=new AccesoModel();

            $user=$_POST['user'];
            $clave=$_POST['clave'];
            $sql="SELECT cod_user, nom_user, ape_user, cod_rol, dir_user, tel_user, corr_user FROM usuarios WHERE pass_user='$clave' AND (corr_user='$user' OR login_user ='$user') ";
            $usuario=$obj->consult($sql);

            if (mysqli_num_rows($usuario)>0) {
                //Revisar el index hay una condicion para restringir el acceso si no se ha logeado
                while ($usu=mysqli_fetch_assoc($usuario)) {
                    $_SESSION['id']=$usu['cod_user'];
                    $_SESSION['nombre']=$usu['nom_user'];
                    $_SESSION['apellido']=$usu['ape_user'];
                    $_SESSION['direccion']=$usu['dir_user'];
                    $_SESSION['telefono']=$usu['tel_user'];
                    $_SESSION['correo']=$usu['corr_user'];
                    $_SESSION['rol']=$usu['cod_rol'];
                    $_SESSION['auth']= "ok";
                }
                // Condicion para el tipo de rol

                if (isset( $_SESSION['rol'])) {

                    switch ( $_SESSION['rol']) {
                        case 1:
                            redirect ("administrador.php"); // Pagina de administrador
                        break;
                        
                        case 2:
                            redirect ("index.php"); //Pagina de usuario
                        break;
                        
                        default;
                        
                    }
                }
            }else{
                redirect ("login.php");
            }
            
            
        }
        // Cerrar sesion
        public function logout(){
            session_destroy();
            redirect("index.php");
        }
    }
?>
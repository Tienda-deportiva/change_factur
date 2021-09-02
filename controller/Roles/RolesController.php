<?php 
    include_once '../model/Roles/RolesModel.php';

    class RolesController{
        public function getInsert(){
            include_once '../view/Roles/insert.php';
        }
        public function postInsert(){
            $obj=new RolesModel();
            $cod_rol=$obj->autoincrement("roles","cod_rol");
            $nom_rol=$_POST['nom_rol'];
            $sql="INSERT INTO roles VALUES ($cod_rol,'$nom_rol')";
            $ejecutar=$obj->insert($sql);

            if ($ejecutar) {
                redirect(getUrl("Roles","Roles","getInsert"));
            }else{
                echo "Ups. ha ocurrido un error";
            }
        }
        public function consult(){
            $obj=new RolesModel();
            $sql="SELECT * FROM roles";
            $roles=$obj->consult($sql);
            include_once '../view/Roles/consult.php';
        }
        public function getUpdate(){
            $obj=new RolesModel();
            $cod_rol=$_GET['cod_rol'];
            $sql="SELECT * FROM roles WHERE cod_rol=$cod_rol";
            $rol=$obj->consult($sql);
            include_once '../view/Roles/update.php';
        }
        public function postUpdate(){
            $obj=new RolesModel();
            $cod_rol=$_POST['cod_rol'];
            $nom_rol=$_POST['nom_rol'];
            $sql="UPDATE roles SET nom_rol='$nom_rol' WHERE cod_rol=$cod_rol";
            $ejecutar=$obj->update($sql);
            if ($ejecutar) {
                redirect(getUrl("Roles","Roles","consult"));
            }else{
                echo "Ups. ha ocurrido un error";
            }
        }
        public function getDelete(){
            $obj=new RolesModel();
            $cod_rol=$_GET['cod_rol'];
            $sql="SELECT * FROM roles WHERE cod_rol=$cod_rol";
            $rol=$obj->consult($sql);
            include_once '../view/Roles/delete.php';
        }
        public function postDelete(){
            $obj=new RolesModel();
            $cod_rol=$_POST['cod_rol'];
            $nom_rol=$_POST['nom_rol'];
            $sql="DELETE FROM roles WHERE cod_rol=$cod_rol";
            $ejecutar=$obj->update($sql);
            if ($ejecutar) {
                redirect(getUrl("Roles","Roles","consult"));
            }else{
                echo "Ups. ha ocurrido un error";
            }
        }


    }

?>
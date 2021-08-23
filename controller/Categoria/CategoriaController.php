<?php
    include_once '../model/Categoria/CategoriaModel.php';

    class CategoriaController{
        public function getInsert(){
            include_once '../view/Categoria/insert.php';
        }
        public function postInsert(){
            $obj=new CategoriaModel();

            $nom_categ=$_POST['nom_categ'];
            $cod_categ=$obj->autoincrement("categorias","cod_categ");
            $sql="INSERT INTO categorias VALUES($cod_categ,'$nom_categ')";

            $ejecutar=$obj->insert($sql);

            if ($ejecutar) {
                redirect(getUrl("Categoria","Categoria","getInsert"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
        public function consult(){
            $obj=new CategoriaModel();

            $sql="SELECT * FROM categorias";
            $categorias=$obj->consult($sql);

            include_once '../view/Categoria/consult.php';
        }
        public function getUpdate(){
            $obj=new CategoriaModel();

            $cod_categ=$_GET['cod_categ'];

            $sql="SELECT * FROM categorias WHERE cod_categ=$cod_categ";
            $categoria=$obj->consult($sql);

            include_once '../view/Categoria/update.php';
        }
        public function postUpdate(){
            $obj=new CategoriaModel();

            $cod_categ=$_POST['cod_categ'];
            $nom_categ=$_POST['nom_categ'];

            $sql="UPDATE categorias SET nom_categ='$nom_categ' WHERE cod_categ=$cod_categ";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Categoria","Categoria","consult"));
            }else{
                echo"Ups, ha ocurrido un error";
            }
        }
        public function getDelete(){
            $obj=new CategoriaModel();

            $cod_categ=$_GET['cod_categ'];

            $sql="SELECT * FROM categorias WHERE cod_categ=$cod_categ";
            $categoria=$obj->consult($sql);

            include_once '../view/Categoria/delete.php';
        }
        public function postDelete(){
            $obj=new CategoriaModel();

            $cod_categ=$_POST['cod_categ'];

            $sql="DELETE FROM categorias WHERE cod_categ=$cod_categ";
            $ejecutar=$obj->delete($sql);

            if ($ejecutar) {
                redirect(getUrl("Categoria","Categoria","consult"));
            }else{
                echo"Ups, ha ocurrido un error";
            }
        }
    }
?>
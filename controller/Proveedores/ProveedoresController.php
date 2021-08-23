<?php

include_once '../model/Proveedores/ProveedoresModel.php';

class ProveedoresController{
    public function getInsert(){
        include_once '../view/Proveedores/insert.php';
    }
    public function postInsert(){
        $obj=new ProveedoresModel();

        $razon_prov=$_POST['razon_prov'];
        $cod_prov=$obj->autoincrement("Proveedores","cod_prov");
        $nit_prov=$_POST['nit_prov'];
        $dir_prov=$_POST['dir_prov'];
        $tel_prov=$_POST['tel_prov'];
        
        $sql="INSERT INTO proveedores VALUES($cod_prov,'$razon_prov','$nit_prov','$dir_prov','$tel_prov')";

        $ejecutar=$obj->insert($sql);

        if ($ejecutar){
            redirect(getUrl("Proveedores","Proveedores","getInsert"));
        }else{
            echo "Ups, ha ocurrido un error";
        }
    }
    public function consult(){
        $obj=new ProveedoresModel();

        $sql="SELECT * FROM proveedores";
        $proveedor=$obj->consult($sql);

        include_once '../view/Proveedores/consult.php';
    }
    public function getUpdate(){
        $obj=new ProveedoresModel();

        $cod_prov=$_GET['cod_prov'];

        $sql="SELECT * FROM proveedores WHERE cod_prov=$cod_prov";
        $proveedores=$obj->consult($sql);

        include_once '../view/Proveedores/update.php';
    }
    public function postUpdate(){
        $obj=new ProveedoresModel();

        $cod_prov=$_POST['cod_prov'];
        $razon_prov=$_POST['razon_prov'];
        $nit_prov=$_POST['nit_prov'];
        $dir_prov=$_POST['dir_prov'];
        $tel_prov=$_POST['tel_prov'];
       

        $sql="UPDATE proveedores SET razon_prov='$razon_prov', nit_prov='$nit_prov', dir_prov='$dir_prov', tel_prov='$tel_prov' WHERE cod_prov=$cod_prov";
        $ejecutar=$obj->update($sql);
    
        if ($ejecutar){
            redirect(getUrl("Proveedores","Proveedores","consult"));
        }else{
            echo "Ups, ha ocurrido un error";
        }
    } 
    public function getDelete(){
        $obj=new ProveedoresModel();
    
        $cod_prov=$_GET['cod_prov'];
    
        $sql="SELECT * FROM proveedores WHERE cod_prov=$cod_prov";
        $proveedores=$obj->consult($sql);
    
        include_once '../view/Proveedores/delete.php'; 
        }
        public function postDelete(){
            $obj=new ProveedoresModel();
    
            $cod_prov=$_POST['cod_prov'];
    
            $sql="DELETE FROM Proveedores WHERE cod_prov=$cod_prov";
            $ejecutar=$obj->delete($sql);
    
            if ($ejecutar) {
                redirect(getUrl("Proveedores","Proveedores","consult"));
            }else{
                echo "Ups, ha ocurrido un error";
         }
    }
}
?>
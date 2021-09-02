<?php

include_once '../model/Inventario/InventarioModel.php';

class InventarioController{
    public function getInsert(){
        $obj=new InventarioModel();

        $sql="SELECT * FROM proveedores";
        $proveedor=$obj->consult($sql);

        $sql="SELECT * FROM categorias";
        $categorias=$obj->consult($sql);

        include_once '../view/Inventario/insert.php';
    }
    public function postInsert(){
        $obj=new InventarioModel();

        $cod_categ=$_POST['cod_categ'];
        $cod_prov=$_POST['cod_prov'];
        $cant_desc_prod_inv=$_POST['cant_desc_prod_inv'];
        $cant_prod_inv=$_POST['cant_prod_inv'];
        $desc_prod_inv=$_POST['desc_prod_inv'];
        $precio_prod_inv=$_POST['precio_prod_inv'];
        $costo_prod_inv=$_POST['costo_prod_inv'];
     	$nom_prod_inv=$_POST['nom_prod_inv'];
        $cod_prod_inv=$obj->autoincrement("inventario_productos","cod_prod_inv");
        $cod_inv=$obj->autoincrement("inventario_productos","cod_inv");

        $img_prod_inv=$_FILES['img_prod_inv']['name'];
        $ruta="img/$img_prod_inv";

        move_uploaded_file($_FILES['img_prod_inv']['tmp_name'],$ruta);

        $sql="INSERT INTO inventario_productos VALUES($cod_inv, $cod_prod_inv,'$nom_prod_inv',$costo_prod_inv, $precio_prod_inv, '$desc_prod_inv', $cant_prod_inv, $cant_desc_prod_inv, '$ruta', $cod_prov, $cod_categ)";

        $ejecutar=$obj->insert($sql);

        if ($ejecutar) {
            redirect(getUrl("Inventario","Inventario","getInsert"));
        }else{
            echo "Ups, ha ocurrido un error";
        }
    }
    public function consult(){
        $obj=new InventarioModel();

        $sql="SELECT inventario_productos.cod_inv, inventario_productos.cod_prod_inv, inventario_productos.nom_prod_inv, inventario_productos.costo_prod_inv, inventario_productos.precio_prod_inv,inventario_productos.desc_prod_inv, inventario_productos.cant_prod_inv, inventario_productos.cant_desc_prod_inv, inventario_productos.img_prod_inv, proveedores.razon_prov, categorias.nom_categ FROM inventario_productos,proveedores,categorias WHERE inventario_productos.cod_prov=proveedores.cod_prov AND inventario_productos.cod_categ=categorias.cod_categ;";

        $inventarios=$obj->consult($sql);

        include_once '../view/Inventario/consult.php';

    }
    public function getUpdate(){
            $obj=new InventarioModel();   
    
            $cod_inv=$_GET['cod_inv'];
    
            $sql="SELECT * FROM inventario_productos WHERE cod_inv=$cod_inv";
            $inventario=$obj->consult($sql);
    
            $sql="SELECT * FROM proveedores";
            $proveedor=$obj->consult($sql);

            $sql="SELECT * FROM categorias";
            $categorias=$obj->consult($sql);
    
            include_once '../view/Inventario/update.php';
    }
    public function postUpdate(){
        $obj=new InventarioModel();
     
        $cod_categ=$_POST['cod_categ'];
        $cod_prov=$_POST['cod_prov'];
        $cant_prod_inv=$_POST['cant_prod_inv'];
        $desc_prod_inv=$_POST['desc_prod_inv'];
        $precio_prod_inv=$_POST['precio_prod_inv'];
        $costo_prod_inv=$_POST['costo_prod_inv'];
     	$nom_prod_inv=$_POST['nom_prod_inv'];
        $cod_prod_inv=$_POST['cod_prod_inv'];
        $cod_inv=$_POST['cod_inv'];
    
        if (isset($_FILES['img_prod_inv']['name'])) {
            $img_prod_inv=$_FILES['img_prod_inv']['name'];
            $ruta="img/$img_prod_inv";

            move_uploaded_file($_FILES['img_prod_inv']['tmp_name'],$ruta);

            $sql="UPDATE inventario_productos SET cod_prod_inv=$cod_prod_inv, nom_prod_inv='$nom_prod_inv', costo_prod_inv='$costo_prod_inv',precio_prod_inv='$precio_prod_inv', desc_prod_inv='$desc_prod_inv', cant_prod_inv='$cant_prod_inv', img_prod_inv='$ruta', cod_prov=$cod_prov, cod_categ=$cod_categ WHERE cod_inv=$cod_inv";
    
            $ruta_imagen_vieja=$_POST['ruta_imagen_vieja'];
                unlink($ruta_imagen_vieja);
        }else{
                $sql="UPDATE inventario_productos SET cod_prod_inv=$cod_prod_inv, nom_prod_inv='$nom_prod_inv', costo_prod_inv='$costo_prod_inv',precio_prod_inv='$precio_prod_inv', desc_prod_inv='$desc_prod_inv', cant_prod_inv='$cant_prod_inv', cod_prov=$cod_prov, cod_categ=$cod_categ WHERE cod_inv=$cod_inv";
        }
    
        $ejecutar=$obj->update($sql);
        
        if ($ejecutar) {
            redirect(getUrl("Inventario","Inventario","consult"));
        }else{
            echo "Ups, ha ocurrido un error";
        }
    }
    public function getDelete(){
        $obj=new InventarioModel();
    
        $cod_inv=$_GET['cod_inv'];
    
        $sql="SELECT * FROM inventario_productos WHERE cod_inv=$cod_inv";
        $inventario=$obj->consult($sql);
    
        $sql="SELECT * FROM proveedores";
        $proveedor=$obj->consult($sql);

        $sql="SELECT * FROM categorias";
        $categorias=$obj->consult($sql);
    
        include_once '../view/Inventario/delete.php'; 
    }
    public function postDelete(){
        $obj=new InventarioModel();
    
        $cod_categ=$_POST['cod_categ'];
        $cod_prov=$_POST['cod_prov'];
        $cant_prod_inv=$_POST['cant_prod_inv'];
        $desc_prod_inv=$_POST['desc_prod_inv'];
        $precio_prod_inv=$_POST['precio_prod_inv'];
        $costo_prod_inv=$_POST['costo_prod_inv'];
     	$nom_prod_inv=$_POST['nom_prod_inv'];
        $cod_prod_inv=$_POST['cod_prod_inv'];
        $cod_inv=$_POST['cod_inv'];
    
            $sql="DELETE FROM inventario_productos WHERE cod_inv=$cod_inv AND cod_prov=$cod_prov AND cod_categ=$cod_categ";

            $ejecutar=$obj->delete($sql);
    
            if ($ejecutar) {
                redirect(getUrl("Inventario","Inventario","consult"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
    }
}  
?>
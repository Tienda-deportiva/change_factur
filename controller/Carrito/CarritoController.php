<?php 
    include_once '../model/Carrito/CarritoModel.php';
    class CarritoController{
        public function getInsert(){
            $obj=new CarritoModel();
            $sql="SELECT * FROM detalle_factura_producto";
            $detalles=$obj->consult($sql);
            include_once '../view/Carrito/insert.php';
        }
        public function postInsert(){
            $obj=new CarritoModel();
            $cod_fact_prod=$obj->autoincrement('detalle_factura_producto', 'cod_fact_prod');
            $cod_fact=$_POST['cod_fact'];
            $cod_inv=$_POST['cod_inv'];
            $cant_vendida=$_POST['cant_vendida'];
            $total_prod=$_POST['total_prod'];
            $sql="INSERT INTO detalle_factura_producto VALUES($cod_fact_prod, $cod_fact, $cant_vendida, $total_prod)";
            $ejecutar=$obj->insert($sql);
            if ($ejecutar) {
                redirect(getUrl("Carrito","Carrito","getInsert"));
            } else {
                echo "Ups, ha ocurrido un error";
            }
            
        }
        public function consult(){
            $obj=new CarritoModel();
            $sql="SELECT detalle_factura_producto.cod_fact_prod, detalle_factura_producto.cod_fact, detalle_factura_producto.cod_inv, detalle_factura_producto.cant_vendida, detalle_factura_producto.total_prod";
            $detalles=$obj->consult($sql);
            include_once '../view/Carrito/consult.php';
        }
        public function getUpdate(){
            $obj=new CarritoModel();
            $cod_fact_prod=$_GET['cod_fact_prod'];
            $sql="SELECT * FROM detalle_factura_producto";
            $detalles=$obj->consult($sql);
            include_once '../view/Carrito/update.php';
        }
        public function postUpdate(){
            $cod_fact_prod=$_POST['cod_fact_prod'];
            $cod_fact=$_POST['cod_fact'];
            $cod_inv=$_POST['cod_inv'];
            $cant_vendida=$_POST['cant_vendida'];
            $total_prod=$_POST['total_prod'];
            $sql="UPDATE detalle_factura_producto SET cod_fact_prod=$cod_fact_prod, cod_fact=$cod_fact, cod_inv=$cod_inv, cant_vendida=$cant_vendida, total_prod=$total_prod WHERE cod_fact_prod=$cod_fact_prod";
            $ejecutar=$obj->update($sql);
            if ($ejecutar) {
                redirect(getUrl("Carrito","Carrito","consult"));
            } else {
                echo "Ups, ha ocurrido un error";
            }
        }
        public function getDelete(){
            $obj=new CarritoModel();
            $cod_fact_prod=$_GET['cod_fact_prod'];
            $sql="SELECT * FROM detalle_factura_producto";
            $detalle=$obj->consult($sql);
            include_once '../view/Carrito/delete.php';
        }
        public function postDelete(){
            $obj=new CarritoModel();
            $cod_fact_prod=$_POST['cod_fact_prod'];
            $cod_fact=$_POST['cod_fact'];
            $cod_inv=$_POST['cod_inv'];
            $cant_vendida=$_POST['cant_vendida'];
            $total_prod=$_POST['total_prod'];
            $sql="DELETE FROM detalle_factura_producto WHERE cod_fact_prod=$cod_fact_prod";
            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Carrito","Carrito","consult"));
            } else {
                echo "Ups, ha ocurrido un error";
            }
            
        }
    }
?>
<?php
    include_once '../lib/conf/connection.php';

    class MasterModel extends Connection{
        public function insert($sql){
            $respuesta=mysqli_query($this->getConnect(),$sql);
            return $respuesta;
        }
        public function consult($sql){
            $respuesta=mysqli_query($this->getConnect(),$sql);
            if(!$respuesta){
                echo mysqli_error($this->getConnect());
                }
            return $respuesta;
        }
        public function update($sql){
            $respuesta=mysqli_query($this->getConnect(),$sql);
            return $respuesta;
        }
        public function delete($sql){
            $respuesta=mysqli_query($this->getConnect(),$sql);
            return $respuesta;
        }
        public function autoincrement($table,$field){
            $sql="SELECT MAX($field) FROM $table";
            $respuesta=$this->consult($sql);
            $contador=mysqli_fetch_row($respuesta);//Sirve para tranformar la informacion que llega de la DB en un arreglo(posiciones_numericas)
            
            return $contador[0]+1;
        }
    }
?>
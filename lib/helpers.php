<?php
    session_start();
    function redirect($url){
        echo "<script type='text/javascript'>"
            ."window.location.href='$url'"
            ."</script>";
    }
    function dd($var){
        echo "<pre>";
        die(print_r($var));
    }
    function getUrl($modulo,$controlador,$funcion,$parametros=false,$pagina=false){
        //modulos=carpetas dentro de controller
        //controlador=archivos dentro del modulo
        //funcion=metodos dentro del controlador
        //El cuarto parametro nos sirve para enviar informacion atra ves de la URL
        if ($pagina==false) {
            $pagina="index";
        }
        $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";
        
        if ($parametros!=false) {
            foreach ($parametros as $key=>$valor) {
                $url .="&$key=$valor";
            }
        }

        return $url;
    }
    function resolve(){
        $modulo=ucwords($_GET['modulo']);
        $controlador=ucwords($_GET['controlador']);
        $funcion=$_GET['funcion'];
        //modulo=carpeta
        //controlador=archivo dentro de modulo
        //funcion=metodo del controlador
        if (is_dir("../controller/$modulo")) {
            //norma para nombre del controlador:
            //NombreDelModuloController.php
            if (file_exists("../controller/$modulo/".$controlador."Controller.php")) {
                include_once "../controller/$modulo/".$controlador."Controller.php";

                $nombreClase=$controlador."Controller";
                $objClase=new $nombreClase();

                if (method_exists($objClase,$funcion)) {
                    $objClase->$funcion();
                }else{
                    echo "La funcion especificada no existe";
                }

            }else{
                echo "El controlador especificado no existe";
            }

        }else{
            echo "El modulo especificado no existe";
        }
    }
?>
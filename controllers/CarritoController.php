<?php 
require_once 'models/Producto.php';

class CarritoController {

    public function index(){
       
        $carrito = $_SESSION['carrito'];
        require_once "views/carrito/index.php";
    }

    // agregar productos al carrito
    public function add(){
        if(isset($_GET['id'])){
            $producto_id = $_GET['id'];
        }else{
            header('Location:'.base_url);
        }

        if(isset($_SESSION['carrito'])){
            $counter = 0;
            foreach($_SESSION['carrito'] as $indice => $elemento){
                if($elemento['id_producto'] == $producto_id){
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }

        }

        // solo voy hacer esta parte si counter no existe o si counter es igual a 0
        if(!isset($counter) || $counter == 0){
            // conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            
            if(is_object($producto)){
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades"=> 1,
                    "producto"=>$producto
                );
            }

        }
            
        

       header("Location:".base_url."Carrito/index");
    }

    // quitar productos al carrito
    public function remove(){

    }

    // eliminar todo el carrito
    public function delete_all(){
        unset($_SESSION['carrito']);
        header("Location:".base_url."Carrito/index");
    }
}
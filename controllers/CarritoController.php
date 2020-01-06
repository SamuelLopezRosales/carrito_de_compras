<?php 
require_once 'models/Producto.php';

class CarritoController {

    public function index(){
       
        if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1){
        $carrito = $_SESSION['carrito'];
        }else{
            $carrito = array();
        }
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
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            unset($_SESSION['carrito'][$index]);
        }

        header("Location:".base_url."Carrito/index");
    }

    // eliminar todo el carrito
    public function delete_all(){
        unset($_SESSION['carrito']);
        header("Location:".base_url."Carrito/index");
    }

    public function up(){
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            $_SESSION['carrito'][$index]['unidades']++;
        }

        header("Location:".base_url."Carrito/index");
    }

    public function down(){
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            $_SESSION['carrito'][$index]['unidades']--;

            if($_SESSION['carrito'][$index]['unidades'] == 0){
                unset($_SESSION['carrito'][$index]);
            }
        }

        header("Location:".base_url."Carrito/index");
    }

}
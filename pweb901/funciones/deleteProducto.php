<?php
session_start();
require_once "conexion.php";

require_once "CambiosBD.php";


$id = $_GET['id'];



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $objetoCambios = new CambiosBD();

    $cambio = $objetoCambios->eliminarProducto($id);
        if($cambio == true){
            echo "<script>alert('Se ha eliminado el Producto exitosamente')</script>";
            header('Refresh:0 , url = ../tienda.php');
        }else{
            echo "<script>alert('Error al eliminar producto')</script>";
            header("Refresh:0 , url = ../tienda.php");

        }
    }
?>
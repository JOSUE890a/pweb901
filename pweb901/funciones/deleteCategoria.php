<?php
session_start();
require_once "conexion.php";

require_once "CambiosBD.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $objetoCambios = new CambiosBD();
    $id['categoria'] = $_POST['categoria'];
    $consulta = $objetoCambios->eliminarCategoria($id);


        if($consulta == true){
            echo "<script>alert('Se ha eliminado la Categoría exitosamente')</script>";
            header('Refresh:0 , url = ../tienda.php');
        }else{
            echo "<script>alert('Error al eliminar Categoría')</script>";
            header("Refresh:0 , url = ../tienda.php");

        }
    }
?>
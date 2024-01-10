<?php
session_start();
require_once "conexion.php";

require_once "CambiosBD.php";

$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $objetoCambios = new CambiosBD();

    $cambio = $objetoCambios->eliminarUsuario($id);
        if($cambio == true){
            echo "<script>alert('Se ha eliminado el Usuario exitosamente!')</script>";
            header('Refresh:0 , url = logout.php');
        }else{
            echo "<script>alert('Error al eliminar Usuario!')</script>";
            header("Refresh:0 , url = ../tienda.php");

        }
    }
?>
<?php
session_start();
include("App/login/validarlogin.php");
include "App/config/database.php";
$conn = new Conexion();

$consulta = $_POST['consulta'];

switch ($consulta) {
  case 'eliminar':
    $id = $_POST['id'];
    $conn->conectar();
    $sql = "DELETE FROM entradas where id='".$id."';";
    $rs = $conn->insert_delete_update($sql);

    if($rs==1){
       echo "true"; 
    }
    else{
        echo "false";
    }
    $conn->desconectar();
    
    break;
  
  default:
    # code...
    break;
}
?>
<?php 
  try{
	$usuario = $_POST['usuario'];
	$contrasena1 = $_POST['clave'];
	$contrasena = md5($contrasena1);
	include("../config/database.php");
	$conn = new Conexion();
	$conn->conectar();
	$query="SELECT * FROM users WHERE email='$usuario' AND pass='$contrasena'";
	$resp=$conn->query($query);
	$conn->desconectar();
	session_start();
    if(mysqli_num_rows($resp)>0){
		$user=$resp->fetch_assoc(); 
        $_SESSION['id_tipo'] = $user['id_tipo'];
        $_SESSION['nombre'] = $user['nombre'];
		$_SESSION['email'] = $user['email'];
        $_SESSION['val'] = "true";
		if($user['id_tipo']==2||$user['id_tipo']==1){
			header("Location:../../home.php");
		}
	   exit();
	} 
	else{
	header("Location:../../?err=1");
	exit();
	}
  }
  catch(Exception $e){
  header("Location:../../?err=2");
  exit();
  }
?>
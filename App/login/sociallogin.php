<?php 
  try{
	$usuario = $_POST['name'];
	$email = $_POST['email'];
	$service = $_POST['service'];
	$id = $_POST['id'];
	include("../config/database.php");
	$conn = new Conexion();
	$conn->conectar();
	$query="SELECT * FROM users WHERE email='$email'";
	$resp=$conn->query($query);
	$conn->desconectar();
	session_start();
    if(mysqli_num_rows($resp)>0){
		$user=$resp->fetch_assoc(); 
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['nombre'] = $user['nombre'];
		$_SESSION['email'] = $user['email'];
        $_SESSION['val'] = "true";
        $_SESSION['id_tipo'] = '2';

        $conn->conectar();
        $query2 = "SELECT * FROM users_social WHERE social_id='".$id."' AND service='".$service."'";
        $resp2=$conn->query($query2);
        $conn->desconectar();
        if(mysqli_num_rows($resp2)>0){
			echo "true";
        }
        else{
        	$conn->conectar();
        	$query3="INSERT INTO users_social (id_user,social_id,service) VALUES ('".$user['id_user']."','".$id."','".$service."')";
			$resp3=$conn->insert_delete_update($query3);
			$conn->desconectar();
			if($resp3==1){
				echo "true";
			}
			else{
			}
        }	
	   exit();
	} 
	else{
		$_SESSION['id_tipo'] = '2';
        $_SESSION['nombre'] = $usuario;
		$_SESSION['email'] = $email;
		$conn->conectar();
		$query="INSERT INTO users (id_tipo,nombre,email) VALUES ('2','".$usuario."','".$email."')";
		$resp=$conn->insert_delete_update($query);
		$last_id = $conn->lastid();
		//$query="INSERT INTO users (id_tipo,nombre,email) VALUES ('2','".$usuario."','".$email."')";
		//$resp=$conn->insert_delete_update($query);
		$query3="INSERT INTO users_social (id_user,social_id,service) VALUES ('".$last_id."','".$id."','".$service."')";
		$resp3=$conn->insert_delete_update($query3);
		$conn->desconectar();
		echo "true";
		exit();
	}
  }
  catch(Exception $e){
  header("Location:../../?err=2");
  exit();
  }
?>
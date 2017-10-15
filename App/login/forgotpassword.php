<?php 
  try{
	$email = $_POST['email'];
	include("../config/database.php");
	$conn = new Conexion();
	$conn->conectar();
	$query="SELECT * FROM users WHERE email='$email'";
	$resp=$conn->query($query);
    if(mysqli_num_rows($resp)>0){
    	$user=$resp->fetch_assoc(); 
    	$uniqidStr = md5(uniqid(mt_rand()));

    	$query2="UPDATE users SET forgotpasswordid='".$uniqidStr."' WHERE email='".$email."'";
		$resp2=$conn->insert_delete_update($query2);
		if($resp==1){
			$resetPassLink = 'http://www.meraki.net/resetPassword.php?fp_code='.$uniqidStr;
			
			$para  =  $user['email']; 
			$titulo = 'Solicitud de recuperación de contraseña';
			$mensaje = '
			<html>
			<head>
			  <title>Solicitud de recuperación de contraseña</title>
			</head>
			<body>
			  <h2>¿Restablecer tu contraseña?</h2>
			  <p>Si solicitaste un restablecimiento de contraseña para '.$user['email'].', 
			  haz clic en el link que aparece a continuación. Si no solicitaste esto, ignora este correo electrónico. </p>
			  <a href="'.$resetPassLink.'" >'.$resetPassLink.'</a>
			</body>
			</html>
			';
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$cabeceras .= 'From: MerakiMagazine  <support@merakimagazine.net>' . "\r\n";
			mail($para, $titulo, $mensaje, $cabeceras);
			header("Location:../../forgotpassword.php?success=1");
		}
	} 
	else{
	header("Location:../../forgotpassword.php?err=1");
	exit();
	}
	$conn->desconectar();
  }
  catch(Exception $e){
  header("Location:../../?err=2");
  exit();
  }
?>
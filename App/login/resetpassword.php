<?php
	try{
		
		$securecode = $_POST['fp_code'];
		$contrasena1 = $_POST['clave1'];
		$contrasena2 = $_POST['clave2'];
		if($contrasena1==$contrasena2){
			$contrasenamd5 = md5($contrasena1);
			include("../config/database.php");
			$conn = new Conexion();
			$conn->conectar();
			$queryresetpass="UPDATE users SET pass='".$contrasenamd5."', forgotpasswordid='' WHERE forgotpasswordid='".$securecode."'";
			$respresetpass=$conn->insert_delete_update($queryresetpass);
			$conn->desconectar();	
				
		    if($respresetpass==1){
				header("Location:../../resetpassword.php?reg=1");
			} 
			else{
			header("Location:../../resetpassword.php?err=3&fp_code=$securecode");
			exit();
			}
		}
		else{
			header("Location:../../resetpassword.php?err=1&fp_code=$securecode");
		}
			
	  }
	  catch(Exception $e){
	  header("Location:../../?err=2");
	  exit();
	  }
?>
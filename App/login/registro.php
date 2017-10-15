<?php
	try{
		$recaptcha = $_POST['g-recaptcha-response'];
		if($recaptcha!=''){
			$secret = "6LcSlDAUAAAAAFThsscJ7bx6EAtS43axst43X2Ft";
			$ip = $_SERVER['REMOTE_ADDR'];
			$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
			$array = json_decode($var, true);
			if($array['success']){
				$usuario = $_POST['usuario'];
				$email = $_POST['email'];
				$contrasena1 = $_POST['clave1'];
				$contrasena2 = $_POST['clave2'];
				if($contrasena1==$contrasena2){
					$contrasena = md5($contrasena1);
					include("../config/database.php");
					$conn = new Conexion();
					$conn->conectar();

					$queryemail = "SELECT * FROM users WHERE email='".$email."'";
					$respemail= $conn->query($queryemail);
					if(mysqli_num_rows($respemail)>0){
						header("Location:../../register.php?err=2");
					}
					else{
						$query="INSERT INTO users (id_tipo,nombre,email,pass) VALUES ('2','".$usuario."','".$email."','".$contrasena."')";
						$resp=$conn->insert_delete_update($query); 
						
						$conn->desconectar();
					    if($resp==1){
							header("Location:../../register.php?reg=1");
						} 
						else{
						header("Location:../../register.php?err=3");
						exit();
						}
					}
				
				}
				else{
					header("Location:../../register.php?err=1");
				}
			}
			else{
				header("Location:../../register.php?recaptcha=2");
			}
		}
		else{
			header("Location:../../register.php?recaptcha=0");
		}
		
	  }
	  catch(Exception $e){
	  header("Location:../../?err=2");
	  exit();
	  }
?>
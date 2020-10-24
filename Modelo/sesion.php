<?php
class Producto{
		/**
		*Funcion para la conexcion a la base de datos 
		*/
		
		public function conexionDB(){
			$con=mysqli_connect("localhost","root","16171010","mundo") or die("Problemas con la conexion a la base de datos");
			return $con;
		}
	/**
    *Funcion de iniciarAdmin para verificar los datos del inicio de sesion el inicio de sesion 
	*/
	
	public function iniciarAdmin($correo,$contrasena){
		$regis=mysqli_query($this->conexionDB(),"SELECT * from usuario  where correo='$correo'")or die(mysqli_error($this->conexionDB()));
		if($lo=mysqli_fetch_array($regis))
		{
			if($correo==$lo['correo']){

				$regis=mysqli_query($this->conexionDB(),"SELECT * from usuario where contrasena='$contrasena'")or die(mysqli_error($this->conexionDB()));
				if($lo=mysqli_fetch_array($regis))
				{
					if($contrasena==$lo['contrasena']){
						session_start(); 
						$_SESSION['id_usuario']=$lo['id_usuario'];
						$_SESSION['correo']=$lo['correo'];
						$_SESSION['Nombre_Usuario']=$lo['Nombre_Usuario'];
						$_SESSION['user_login_status'] = 1;
						echo'<script>alert("Bienvenido a Mundo caricatura '.$_SESSION['Nombre_Usuario'].'")</script>';
						echo"<script>location.href='../proceso/index.php'</script>";
					}else{
						echo'<script>alert("La contrasena que ingreso no es Correcta Intenta de nuevo.")</script>';
						echo"<script>location.href='../sesion.php'</script>";
					}	
				}
			}

		}else{
			$registros=mysqli_query($this->conexionDB(),"SELECT * from tabla administrado where correo='$correo'")or die(mysqli_error($this->conexionDB()));
			if($reg=mysqli_fetch_array($registros))
			{
				$registros=mysqli_query($this->conexionDB(),"SELECT * from tabla administrado where contrasena='$contrasena'")or die(mysqli_error($this->conexionDB()));
				if($reg=mysqli_fetch_array($registros)){
					session_start(); 
					$_SESSION['correo']=$reg['correo'];
					//$_SESSION['nombre']=$reg['ombre'];
					$_SESSION['user_login_status'] = 1;
					echo'<script>alert("El administrador ha iniciado sesion")</script>';
					echo"<script>location.href='../index.php'</script>";

				}else{
					echo '<script language="javascript">alert("La contrasena que ingreso no es Correcta Intenta de nuevo.");
					window.location.href="../index.php";
					</script>'; 
				}
			}else{
				echo '<script language="javascript">alert("El Correo que ingresado no es Correcto Intenta de nuevo.");
				window.location.href="../index.php";
				</script>'; 
			}	

		}
	}

     /**
 * Devuelve la información del usuario sobre la cuenta
 */

     public function isUserLoggedIn()
     {
     	if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
     		return true;
     	}
        // default return
     	return false;
     }
     public function cerrarConexion(){
			mysqli_close($this->conexionDB());
		}
 }

?>
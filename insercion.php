<?php 
//Conexion a la base de datos y tablas a usar 
include ("conexion.php");
include ("php/Verificacion.php");
$funcion = new Verificacion;
	//asignacion de valores
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$NCtrl=$_POST['NCtrl'];
$Carrera=$_POST['Carrera'];

$pass=$_POST['popover'];
$correo=$_POST['correo'];
$confirmacionpass=$_POST['passconfirm'];
//verificacion de semestre extendido o dentro del rango 
if($_POST['Semestre']== null || $_POST['Semestre']==0){
	$Semetre=$_POST['txtOtro'];
}
else{
	$Semetre=$_POST['Semestre'];
}

//encriptacion de Contraseña
$passHash = password_hash($pass, PASSWORD_BCRYPT);

//Condicion para campos vacios
if($Nombre==""||$Apellido==""||$NCtrl==""||$pass==""||$correo==""||$confirmacionpass==""){
	echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');
	history.go(-1);</script>";
	
        exit;
}
else{

		//validacion de correo por expresiones regulares 
	$ExCorreo='/^[a-zA-Z(0-9)?]{4,}((\.)?[a-zA-Z(0-9)?]{3,})?@tectijuana\.edu\.mx$/';
	//validacion de contraseña tiene que ser alfanumerica con minimo un numero una letra mayuscula, un caracter especial de una longitud de 8 como minimo maximo de 15
	$ExPass='/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/';
	if (preg_match($ExCorreo, $correo ) && $funcion->verificacionEmail($correo)) {
		
	//validacion de contraseña con expresion regular 
		if (preg_match($ExPass, $pass )) {
			//condicion para comparar password
				if($pass==$confirmacionpass){
					if ($funcion->VerificarNctrl($NCtrl)){
						echo "<script> alert('Numero de control ya registrado.');
						history.go(-1);</script>";
					}
					else{
						//instrucciones sql
						$Consulta="INSERT INTO $alumno(Nombre,Apellido,carrera,Semetre,N_Control) VALUES('$Nombre','$Apellido','$Carrera','$Semetre','$NCtrl')";
						$insertarCorreo="INSERT INTO  $usuario(correo,password) VALUES('$correo','$passHash')";
								//ejecutar comando de sql
							$Hacer=mysqli_query($conexion,$insertarCorreo);
							$Ejecutar=mysqli_query($conexion,$Consulta);
							//verificacion de comando ejecutado
							if (!$Ejecutar && !$Hacer) {
							//mensaje de error						
								echo "error.";
							} else{
								//alerta de proceso exitoso y redireccionamiento
							echo "<script type=\"text/javascript\">alert('Usuario registrado.'); window.location='registro.php';</script>";
							}
							//Cerrar conexion
							mysqli_close($conexion);
					}
				
				}else{
					//mensaje de alerta para contraseñas 
					echo "<script type=\"text/javascript\">alert('La contraseña debe coincidir.');
					history.go(-1);</script>";
				
			        exit;
				}
		}
		else{
			//mensaje de error contraseña poco segura 
			echo "<script type=\"text/javascript\">alert('Contraseña invalida.'); </script>";
		
			exit;
		}
		
	} else {
		//mensaje de alerta y vuelta a pagina anterior para conservar datos  
		echo "<script type=\"text/javascript\">alert('Correo electronico no valido/Ya registrado.');history.go(-1);</script>";
		exit;
		
	} 


	
}
?>

<?php 
//Conexion a la base de datos y tablas a usar 
include ("Conexion.php");
include ("php/Verificacion.php");
include ("php/DatosUsuario.php");
$funcion = new Verificacion;
$Usuarios= new DatosUsuario;
	//asignacion de valores
$Nombre="luis";
$Apellido="Barajas";
$NCtrl=13241365;
$Carrera="ISC";
$pass="Luis1234@";
$correo="luis.baajss17@tectijuana.edu.mx";
$confirmacionpass="Luis1234@";
//verificacion de semestre extendido o dentro del rango 
if($_POST['Semestre']== null || $_POST['Semestre']=='Otro'){
	$Semetre= $_POST['txtOtro'];
}
else{
	$Semetre=$_POST['Semestre'];
}
echo $Semetre;
//encriptacion de Contraseña
$passHash = password_hash($pass, PASSWORD_BCRYPT);

	//validacion de correo por expresiones regulares 
	$ExCorreo='/^[a-zA-Z(0-9)?]{4,}((\.)?[a-zA-Z(0-9)?]{3,})?@tectijuana\.edu\.mx$/';
	//validacion de contraseña tiene que ser alfanumerica con minimo un numero una letra mayuscula, un caracter especial de una longitud de 8 como minimo maximo de 15
	$ExPass='/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/';
	//Expresion de numero de control valido
	$ExNctrl ='/^[0-9]{8,}$/';
	//VERIFICACION DE CAMPOS VACIOS 
	if($Nombre=="" || $Nombre==null || $Apellido==""||$Apellido == null || $NCtrl=="" || $NCtrl==null ||$Carrera=="" || $Carrera == null
	||$pass=="" || $pass==null ||$correo == ""|| $correo == null|| $confirmacionpass == "" || $confirmacionpass == null|| $Semetre=="" || $Semetre ==null){
		echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');
						history.go(-1);</script>";
	}
	//verificacion de estructura de correo y existencia en DB
	else if(preg_match($ExCorreo,$correo)&&$funcion->VerificacionEmail($correo)){
			//verifiicacion de existencia de numero de control
			if($funcion->VerificarNctrl($NCtrl)&& preg_match($ExNctrl,$NCtrl)){
					if(preg_match($ExPass,$pass)&& $pass == $confirmacionpass){
						//insercion de datos 
						$DatosAlumno="INSERT INTO alumno(name,last_name,semestre,CARRERA,nctrl) VALUES('$Nombre','$Apellido','$Semetre','$Carrera','$NCtrl');";
						//OBTIENE ID DE ALUMNO PARA INSERTAR DATOS DE USUARIO 
						$id= $Usuarios->Datos($NCtrl);	
						//INSERCION A USUARIOS				
						$DatosUsuario= "INSERT INTO $usuario (id_alumno,email,pass,active) VALUES($id,'$correo','$passHash',0);";
						//EJECUCION DE COMANDOS
						$ingreso=mysqli_query($conexion,$DatosUsuario);
						$insercion= mysqli_query($conexion,$DatosAlumno);
						//CIERRE DE CONEXION
						mysqli_close($conexion);
					}
					else{
						echo "<script>alert('Contraseña debil/No coinciden.');";
					}
				}
				else{
			 	echo "<script>alert('Solo se aceptan numeros/Numero de control ya registrado.'); history.go(-1);</script>";
				 }	
	}
	else{
		echo "<script type=\"text/javascript\">alert('Correo invalido/Ya registrado.');
						history.go(-1);</script>";
	}

?>

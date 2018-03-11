<?php
//inicio de sesion
//Conexion a la base de datos y tablas a usar 
include ("conexion.php");
//habilita uso de variables globales
session_start();
    ob_start();
//recibir datos 
$Usuario=$_POST['username'];
$Pass=$_POST['password'];
//declaracion de variable global
 $_SESSION['sesion_exito']=0;
 //condicion para campos vacios
     if($Usuario=="" || $Pass=="")
      {
        $_SESSION['sesion_exito']=2;//2 sera error de campos vacios
      
      }
      else
      {
         
        $_SESSION['sesion_exito']=3;//3 Datos Incorrectos
        //consulta a la base de datos
        $resultados = mysqli_query($conexion,"SELECT * FROM $usuario WHERE email = '$Usuario' ");
        //ciclo para la lectura de datos de la consulta
        while($consulta = mysqli_fetch_array($resultados))
            {
               $_SESSION['sesion_exito']=1;//Inicio Sesion :D
        
             //verificacion de contraseña encriptada
               if (password_verify($Pass, $consulta['pass'])) {
               	// redireccionamiento a pagina de inicio logeado 
               	 header('Location:home.php');
               }
               else{
               	//mensaje de error contraseña incorrecta
               		echo "<script type=\"text/javascript\">alert('Datos Incorrectos.');</script>";
		exit;
               }

            }
         
            //cerrar conexion
    	 mysqli_close($conexion);
      }
    
      //redireccionamiento a pagina de inicio por algun error
    // if($_SESSION['sesion_exito']<>1)
    // {
    //   header('Location:index.php');
    // }

?>
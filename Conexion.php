<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "ingles";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$alumno = "alumno";//tabla de datos del alumno 	   
	$usuario="usuario";//tabla de usuarios regristrados 
	$Fechas="fechas_examen"; //tabla de fechas 
	
	//cadena de conexion
	$conexion = mysqli_connect($host,$usuariodb,$clavedb,$basededatos);

	//condicion en caso de error en conexion 
	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>
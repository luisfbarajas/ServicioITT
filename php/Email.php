<?php 


$email= $_POST['email'];

include ("../Conexion.php");


$Consulta ="SELECT COUNT(correo) as 'total' FROM `usuario` WHERE correo='$email'";
  $results =mysqli_query($conexion,$Consulta);
 $prueba=mysqli_fetch_assoc($results);
 // 		while($Resultados = mysqli_fetch_array($results)){
 // 			echo 1;
 			
 // 			}
 // 		 mysqli_close($conexion);
 	// $resultado=$conexion - > query($Consulta);
 	//$fila= mysqli_num_rows($results);
 	
 	if($prueba['total']!= 0){
			echo $prueba['total'];
 		}
 		else{
 			echo $prueba['total'];
 		}
 ?>


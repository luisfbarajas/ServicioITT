

<?php 
sleep(1);

//$Correo=$_POST["email"];

include ("../Conexion.php");
if($_REQUEST) {
$Correo=$_REQUEST["email"];
$Consulta ="SELECT*FROM $usuario WHERE correo=$Correo";
 $results = mysqli_query($conexion, $Consulta) or die('Error de conexion');
 	if (!$results ) {
 		 echo '<div id="Error">Usuario ya existente</div>';
  
 	}
 	else{} 
 		 mysqli_close($conexion);
 }?>
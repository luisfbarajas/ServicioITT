<?php 
$Name = $_POST['nombre'];
$Last_Name = $_POST['apellido'];
$Semestre = $_POST['semestre'];
$Carrera = $_POST['carrera'];
$Nctrl = $_POST['numero'];
$Correo = $_POST['email'];
$id = $_POST['id'];
// $Name="luis";
// $Last_Name="barajas";
// $Semestre = 11;
// $Carrera = "ISC";
// $Nctrl = "13210365";
// $Correo = "luis.barajas17@tectijuana.edu.mx";
// $id  = 14;

include "../Conexion.php";

//Actualizacion de datos 
$update = "UPDATE $alumno INNER JOIN $usuario ON usuario.id_alumno=alumno.id SET 
alumno.name= '$Name',
alumno.last_name='$Last_Name',
alumno.nctrl = '$Nctrl',
alumno.CARRERA = '$Carrera',
alumno.semestre = $Semestre,
usuario.email = '$Correo'
WHERE usuario.id_alumno=alumno.id AND alumno.id=$id";

$Consulta = mysqli_query($conexion, $update);
mysqli_close($conexion);
echo "Datos actualizados.";


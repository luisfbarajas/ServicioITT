<?php
require_once '../Conexion.php';

$Id = $_POST['id'];
$FolioP = $_POST['FolioP'];
$FechaExamen = $_POST['FechaExamen'];
$FechaPago = $_POST['FechaPago'];



$Query = "INSERT INTO $RegistroExamen (ID_FECHAS,ID_ALUMNO,HORA,FechaPago,FolioPago) VALUES (11,$Id,'8:00AM','$FechaPago','$FolioP')";

$execute = mysqli_query($conexion, $Query);

if(!$execute){
   return trigger_error(mysqli_error($conexion));
}

mysqli_close($conexion);

echo $execute;
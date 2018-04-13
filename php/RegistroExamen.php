<?php 
require "../Conexion.php";
include "DatosUsuario.php";
$funcion= new DatosUsuario;
$Folio=$_POST["folioP"];
$Fecha_Pago=$_POST["fechaP"];
$Nctrl=$_POST["Nctrl"];

$id=$funcion->datos($Nctrl,$conexion,$alumno);
echo $id;

?>
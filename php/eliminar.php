<?php
include_once "../Conexion.php";
$id = $_GET['id'];

echo $id;


$Eliminar = "DELETE FROM $Fechas WHERE id=$id";

$Ejecuta = mysqli_query($conexion, $Eliminar);
echo var_dump($Ejecuta);
if ($Ejecuta) {
    echo "<script>alert('Fecha eliminada');</script>";
}
header('location:../dateAdd.php');
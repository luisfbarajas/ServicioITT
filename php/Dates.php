<?php
include_once '../Conexion.php';
 //declaracion de variables
$funcion = $_POST['accion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$unidad = $_POST['unidad'];
$salon = $_POST['salon'];
$cupo = intval($_POST['cupo']);
$id = $_POST['id'];
 //creacion de onjeto para llamada a funciones
$llamada = new adminFechas;
//verificacion de accion a realizar
//agregar
if ($funcion == "1") {
   return $llamada->AgregarFecha($conexion, $Fechas, $fecha, $hora, $unidad, $salon, $cupo);
}
 //editar
if ($funcion == "2") {
   return $resulta = $llamada->EditarFecha($conexion, $Fechas, $fecha, $hora, $unidad, $salon, $cupo, $id);

}
class adminFechas
{
    function AgregarFecha($conexion, $tabla, $fecha, $hora, $unidad, $salon, $cupo)
    {
        $sql = "INSERT INTO $tabla (FECHA,HORARIO,SALON,UNIDAD,cupo) VALUES('$fecha','$hora','$salon','$unidad','$cupo')";
        $query = mysqli_query($conexion, $sql);
        return $query;
    }
    function EditarFecha($conexion, $tabla, $fecha, $hora, $unidad, $salon, $cupo, $id)
    {
        $Editar = "UPDATE $tabla SET 
        FECHA='$fecha',
        HORARIO= '$hora',
        SALON = '$salon',
        UNIDAD = '$unidad',
        cupo = $cupo
        WHERE id=$id ";
        $ejecutar = mysqli_query($conexion, $Editar);
        return $ejecutar;

    }
}
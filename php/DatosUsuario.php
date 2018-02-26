<?php
 include '../Conexion.php';

 function Datos($nombre){
    $Usuario= $nombre;
    $Consulta="SELECT * FROM $alumno WHERE Nombre= '$Usuario'";
    

 }



?>
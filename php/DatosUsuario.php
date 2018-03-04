<?php
class DatosUsuario{
    public function Datos($nombre){
        include ("../Conexion.php");
        $Usuario= $nombre;
        $Consulta="SELECT * FROM $alumno WHERE name ='$Usuario' ";
        $resultado= mysqli_query($conexion,$Consulta) ;
        $filas= $resultado->num_rows;
            while($row = mysqli_fetch_array($resultado)){     
                return $row["id"];
            }
            mysqli_close($conexion);
     }

    }
    //llamada a metodo de funcion ejemplo 
    $funcion = new DatosUsuario;
   echo $funcion-> Datos("luis");
 ?>
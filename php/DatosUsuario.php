<?php
class DatosUsuario{
    public function Datos($nombre){
        require "Conexion.php";
        $Usuario= $nombre;
        $Consulta="SELECT * FROM $alumno WHERE nctrl =$Usuario ";
        $resultado= mysqli_query($conexion,$Consulta) ;
        $filas= $resultado->num_rows;
            while($row = mysqli_fetch_array($resultado)){     
                return $row["id"];
            }
            mysqli_close($conexion);
     }
    }
    // $funcion = new DatosUsuario;
    // echo $funcion->Datos(13210365);
 ?>
<?php
class DatosUsuario{
    public function Datos($nombre){
        require "Conexion.php";
        $Usuario= $nombre;
        $Consulta="SELECT * FROM $alumno WHERE nctrl ='$Usuario' ";
        $resultado= mysqli_query($conexion,$Consulta) ;
            while($row = mysqli_fetch_array($resultado)){     
                return $row["id"];
            }
            mysqli_close($conexion);
     }
     function UsuarioId($email){
         require "Conexion.php";
         $Consulta = "SELECT alumno.id, usuario.email from $usuario INNER JOIN $alumno WHERE usuario.id_alumno=alumno.id AND usuario.email='$email'";
         $resultado = mysqli_query($conexion,$Consulta);
         $resultados = mysqli_fetch_array($resultado);
         return $resultados['email'];
          mysqli_close($conexion);
     }
    }
    // $funcion = new DatosUsuario;
    // echo $funcion->UsuarioId('cesar.lopez16@tectijuana.edu.mx');
 ?>
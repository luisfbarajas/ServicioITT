<?php
class DatosUsuario
{

    public function getAllStudents($table,$conexion)
    {
        $query = "SELECT * FROM {$table} INNER JOIN usuario ON alumno.id = usuario.id_alumno";
        $execute = mysqli_query($conexion, $query);
        $result = mysqli_fetch_all($execute);
        return $result;
    }
    public function Datos($nombre, $conexion, $tabla)
    {
       // require "../Conexion.php";
        $Usuario = $nombre;
        $Consulta = "SELECT * FROM $tabla WHERE nctrl ='$Usuario' ";
        $resultado = mysqli_query($conexion, $Consulta);
        while ($row = mysqli_fetch_array($resultado)) {
            return $row["id"];
        }
        mysqli_close($conexion);
    }
    function UsuarioId($email)
    {
        require "Conexion.php";
        $Consulta = "SELECT alumno.id, usuario.email from $usuario INNER JOIN $alumno WHERE usuario.id_alumno=alumno.id AND usuario.email='$email'";
        $resultado = mysqli_query($conexion, $Consulta);
        $resultados = mysqli_fetch_array($resultado);
        return $resultados['email'];
        mysqli_close($conexion);
    }
}
// include_once '../Conexion.php';
//     $funcion = new DatosUsuario;
//     // echo $funcion->UsuarioId('cesar.lopez16@tectijuana.edu.mx');
//     echo var_dump($funcion->getAllStudents('alumno',$conexion));
?>
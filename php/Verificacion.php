<?php
class Verificacion
{

    public function VerificacionEmail($email)
    {
        require('../Conexion.php');
        $Consulta = "SELECT COUNT(email) as total from $usuario WHERE email='$email'";
        $resultados = mysqli_query($conexion, $Consulta);
        $contador = mysqli_fetch_assoc($resultados);

        if ($contador['total'] == 0)
            return true;
        else
            return false;

        mysqli_close($conexion);
    }
    public function VerificarNctrl($numero)
    {
        require '../Conexion.php';
        $Consulta = "SELECT COUNT(nctrl) as total FROM $alumno WHERE nctrl = '$numero'";
        $resultado = mysqli_query($conexion, $Consulta);
        $verifica = mysqli_fetch_assoc($resultado);
        if ($verifica['total'] == 0)
            return true;
        else
            return false;
    }

}
// $funcion = new Verificacion;

// if ($funcion->VerificacionEmail('luis.barajas17@tectijuana.edu.mx'))
// echo 'no existe';
// else
// echo 'existe';

// if ($funcion->VerificarNctrl('13210365'))
// echo 'no existe';
// else
// echo 'existe';
?>

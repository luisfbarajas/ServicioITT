<?php
class makeChange{
    function nameChange($nombre,$newname,$id){
        include_once = '../Conexion.php';
        if($nombre != $newname){
            $query = "UPDATE $alumno SET name='$newname' WHERE id ='$id'";
            $Consulta = mysqli_query($conexion,$query);    
            mysqli_close($conexion);
        }
    }

    function lastnameChange($lastname,$newlastname,$id){
        include_once = '../Conexion.php';
        if($lastname != $newlastname){
            $query = "UPDATE $alumno SET las_name='$newlastname' WHERE id ='$id'";
            $Consulta = mysqli_query($conexion,$query);    
            mysqli_close($conexion);
        }
    }
    function nctrlChange($Nctrl,$newNctrl,$id){
        include_once = '../Conexion.php';
        if($Nctrl != $newNctrl){
            $query = "UPDATE $alumno SET nctrl='$newNctrl' WHERE id ='$id'";
            $Consulta = mysqli_query($conexion,$query);    
            mysqli_close($conexion);
        }
    }
    function CarreraChange($Carrera,$newCarrera,$id){
        include_once = '../Conexion.php';
        if($Carrera != $newCarrera){
            $query = "UPDATE $alumno SET CARRERA='$newCarrera' WHERE id ='$id'";
            $Consulta = mysqli_query($conexion,$query);    
            mysqli_close($conexion);
        }
    }
    function SemetreChange($semestre,$newSemestre,$id){
        include_once = '../Conexion.php';
        if($semestre != $newSemestre){
            $query = "UPDATE $alumno SET semestre='$newSemestre' WHERE id ='$id'";
            $Consulta = mysqli_query($conexion,$query);    
            mysqli_close($conexion);
        }
    }
    function emailChange($correo,$newcorreo,$id){
        include_once = '../Conexion.php';
        if($correo != $newcorreo){
            $query = "UPDATE $usuario SET email='$newcorreo' WHERE id ='$id'";
            $Consulta = mysqli_query($conexion,$query);    
            mysqli_close($conexion);
        }
    }
}
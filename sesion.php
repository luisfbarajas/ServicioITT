<?php
//inicio de sesion
//Conexion a la base de datos y tablas a usar 
include("Conexion.php");
//habilita uso de variables globales
session_start();
    // ob_start();
//recibir datos 
$Usuario = $_POST['username'];
$Pass = $_POST['password'];
//declaracion de variable global
$_SESSION['sesion_exito'] = 0;
 //condicion para campos vacios
if ($Usuario == "" || $Pass == "") {
  $_SESSION['sesion_exito'] = 2;//2 sera error de campos vacios
  return false;
} else {

  $_SESSION['sesion_exito'] = 3;//3 Datos Incorrectos
  return false;
        //consulta a la base de datos
  $resultados = mysqli_query($conexion, "SELECT * FROM $usuario WHERE email = '$Usuario' ");
        //ciclo para la lectura de datos de la consulta
  while ($consulta = mysqli_fetch_array($resultados)) {
    $_SESSION['sesion_exito'] = 1;//Inicio Sesion :D
        
             //verificacion de contraseña encriptada
    if (password_verify($Pass, $consulta['pass'])) {
      $_SESSION['menuID'] = $consulta['tipo'];
      $_SESSION['emailUser'] = $Usuario;
                 // redireccionamiento a pagina de inicio logeado
      $_SESSION['sesion_exito'] = 1; 
                 //  header('Location:home.php');
      return true;
    } else {
               	//mensaje de error contraseña incorrecta
      echo "<script type=\"text/javascript\">alert('Datos Incorrectos.');</script>";
      return false;
      exit;
    }

  }
         
            //cerrar conexion
  mysqli_close($conexion);
}
    
      //redireccionamiento a pagina de inicio por algun error
if ($_SESSION['sesion_exito'] <> 1) {
  // header('Location:index.php');
  return false;
}

class SesionValidate
{

  private $UserName = null;
  private $Password = null;

  public function __construct($UserName, $Password)
  {
    $this->UserName = $UserName;
    $this->Password = $Password;
  }

  public function validate()
  {
    while ($Datos = mysqli_fetch_array(getData())) {
      if (validPassword($Datos['pass'])) {
        $_SESSION['menuID'] = $Datos['tipo'];
        $_SESSION['emailUser'] = $this->UserName;
        $_SESSION['sesion_exito'] = 1;
        return true;
      } else{
        return false;
      }
    }
  }
  private function getData()
  {
    include_once 'Conexion.php';
    $resultados = mysqli_query($conexion, "SELECT * FROM $usuario WHERE email = '$Usuario' ");
  }

  private function validPassword($Password)
  {
    if (password_verify($this->Password, $Password)) {
      return true;
    } else {
      return false;
    }
  }
}

?>
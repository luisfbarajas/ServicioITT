<?php
class SesionValidate
{
  private $UserName = null;
  private $Password = null;

  public function __construct($UserName, $Password)
  {
    $this->UserName = $UserName;
    $this->Password = $Password;
  }
  private function validPassword($Password)
  {
    if (password_verify($this->Password, $Password)) {
      return true;
    } else {
      return false;
    }
  }
  public function validate()
  {
   $Datos=$this->getData();
    while ($Datos = mysqli_fetch_array($Datos)) {
      if ($this->validPassword($Datos['pass'])) {
        $_SESSION['menuID'] = $Datos['tipo'];
        $_SESSION['emailUser'] = $this->UserName;
        $_SESSION['sesion_exito'] = 1;       
        echo 'yes';
        return true;
      } else{
        return false;
      
      }
    }
  }
  private function getData()
  {
    include_once 'Conexion.php';
    $resultados = mysqli_query($conexion, "SELECT * FROM $usuario WHERE email = '$this->UserName' ");
    return $resultados;
  }

 
}
session_start();

if(isset($_POST)){
  $Usuario = $_POST['username'];
  $Pass = $_POST['password'];
  $funcion = new SesionValidate($Usuario,$Pass);
  $call= $funcion->validate();
  echo $call;
}else{
  
}

?>
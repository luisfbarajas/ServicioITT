
        
<?php 
include_once 'php/headerHTML.php';
session_start();
ob_start();

if ($_SESSION['sesion_exito'] == 0) {
    echo "inicie sesion por favor";

    header('Location:index.php');
}
if ($_SESSION['sesion_exito'] == 2) {
    echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');</script>";
}
if ($_SESSION['sesion_exito'] == 3) {
    echo "<script type=\"text/javascript\">alert('Usuario o Contraseña incorrectos.');</script>";
}

if ($_SESSION['menuID'] == 0) {
    include 'menuAdmin.php';
} else {
    include 'menuUsuario.php';
}

include('php/DatosUsuario.php');
include('Conexion.php');
$funcion = new DatosUsuario;
$email = $funcion->UsuarioId($_SESSION['emailUser']);
          
                          //consulta de datos 
$Consulta = "SELECT alumno.name,alumno.last_name,alumno.nctrl,alumno.CARRERA,usuario.email,
                           alumno.semestre FROM alumno INNER JOIN usuario where usuario.id_alumno=alumno.id and usuario.email='$email'";
$resultados = mysqli_query($conexion, $Consulta);
                           //ASIGNACION DE RESULTADOS
$resultado = mysqli_fetch_array($resultados);
                           //despliegue de datos primera columna   
$datos1 = " <label class='letra-datos'>Nombre(s):" . $resultado['name'] . " </label><br>
                        <label class='letra-datos'>Apellidos: " . $resultado['last_name'] . " </label><br>
                        <label class='letra-datos'>Carrera: " . $resultado['CARRERA'] . " </label><br>";
                        //despliegue de datos segunda columna
$datos2 = " <label class='letra-datos'>Numero de control: " . $resultado['nctrl'] . "</label><br>
                        <label class='letra-datos'>Semestre: " . $resultado['semestre'] . "</label><br>
                        <label class='letra-datos'>Correo: " . $resultado['email'] . "</label><br>";
?>
    <div class="container mover caja" >
        <div class="row contiene-datos">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                    <img src="img/user.png" alt="usuario" name="usuario" class=" foto-usuario">
                </div>
                <div class="col-sm-4 col-lg-4">
                    <?php echo $datos1; ?>
                </div>
                <div class="col-sm-4 col-lg-4"> 
                <?php echo $datos2; ?>               
                </div>
            </div>
        </div>
    </div>
<br>
 <?php 
include_once 'php/footerHTML.php';
?>
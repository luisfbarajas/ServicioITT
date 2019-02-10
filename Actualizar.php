<?php 
session_start();
ob_start();

if ($_SESSION['sesion_exito'] == 0) {
    echo "Inicie sesión por favor";

    header('Location:index.php');
}
if ($_SESSION['sesion_exito'] == 2) {
    echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');</script>";
}
if ($_SESSION['sesion_exito'] == 3) {
    echo "<script type=\"text/javascript\">alert('Usuario o Contraseña incorrectos.');</script>";
}
include_once 'php/headerHTML.php';
include('php/DatosUsuario.php');
include('Conexion.php');
        //creacion de objeto para clase
$funcion = new DatosUsuario;  
         //llamada a funcion       
$email = $funcion->UsuarioId($_SESSION['emailUser']);
        //consulta de datos
$Consulta = "SELECT alumno.name,alumno.last_name,alumno.nctrl,alumno.CARRERA,usuario.email,
        alumno.semestre, alumno.id FROM alumno INNER JOIN usuario where usuario.id_alumno=alumno.id and usuario.email='$email'";
$resultados = mysqli_query($conexion, $Consulta);

        //ASIGNACION DE RESULTADOS
$resultado = mysqli_fetch_array($resultados);
?>
    <div class="menu">
    <?php include 'menuUsuario.php'; ?>
    </div>
    <h3 class="Fecha-Titulo">Actualización de datos.</h3>
 
    <div class="container">
        <p class="intro">Realice únicamente las correcciones en los datos con errores, si los datos están correctos
            no los modifique.
            <b>
                <span class="text-danger"> Recuerda guardar los cambios.</span>
            </b>
        </p>
                    <div class="row pt">
                     <div class="col-xs-12 col-sm-4 ">
                         <label for="nombre">Nombre(s):</label><br>
                         <div class="form-group">
                          <div class="input-group">
                           <div class="input-group-addon"><span class="glyphicon glyphicon-user" id="Correos"></span></div>
                              <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $resultado['name']; ?>">
                            </div>
                            <span class="help-block" id="error"></span>                     
                           </div>
                          </div>
                    <div class="col-xs-12 col-sm-4">
                       <div class="form-group">
                      <label for="Apellidos">Apellidos:</label><br>
                      <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $resultado['last_name']; ?>">
                    </div>
                    <span class="help-block" id="error"></span>    
                    </div>
                     <div class="col-xs-12 col-sm-4">
                        <label>Correo electrónico:</label><br>
                        <div class="form-group">
                          <div class="input-group">
                             <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" id="Correos"></span></div>
                                <input name="email" id="email" type="text" class="form-control" placeholder="Correo electronico"
                                 value="<?php echo $resultado['email']; ?>">
                              </div> 
                              <span class="help-block" id="error"></span>                     
                            </div>
                          </div> 
                       </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label>Número de control:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-credit-card icon"></span></div>
                        <input type="text" name="Nctrl" id="Nctrl" class="form-control" value="<?php echo $resultado['nctrl']; ?>">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label>Semestre:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-list-numbered icon"></span></div>
                      <input type="text" name="Semestre" id="Semestre" class="form-control" value="<?php echo $resultado['semestre']; ?>">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <label>Carrera</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-book icon"></span></div>
                       <input type="text" name="Carrera" id="Carrera" class="form-control" value="<?php echo $resultado['CARRERA']; ?>">
                    </div>
                  </div>
                </div>
               </div>
                    <button type="submit" name="btnUpdate" id="btnUpdate" 
                    class="btn btn-success boton btn-md" style="margin-top: 2%;">
                    <i class="glyphicon glyphicon-refresh"></i>&nbsp; Actualizar
                    </button>
                    <label name="Userid" id="Userid" hidden=true ><?php echo $resultado['id']; ?> </label>

               <?php
                include_once 'php/footerHTML.php';
                ?>
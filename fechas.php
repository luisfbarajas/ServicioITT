<?php
include_once 'php/headerHTML.php';
?>
<!--menu -->
<div class="header menu">
    <?php
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
    include 'menuUsuario.php';
    include('php/DatosUsuario.php');
    include('Conexion.php');
    $funcion = new DatosUsuario;
    $email = $funcion->UsuarioId($_SESSION['emailUser']);

      //consulta de datos 
    $Consulta = "SELECT alumno.name,alumno.last_name,alumno.nctrl,alumno.CARRERA,usuario.email,
       alumno.semestre, alumno.id FROM alumno INNER JOIN usuario where usuario.id_alumno=alumno.id and usuario.email='$email'";
    $resultados = mysqli_query($conexion, $Consulta);
       //ASIGNACION DE RESULTADOS
    $resultado = mysqli_fetch_array($resultados);
      //CONSULTA PARA FECHAS DISPONIBLES
    $FechaConsulta = "SELECT*FROM $Fechas";
    $fechaResultado = mysqli_query($conexion, $FechaConsulta);
    $name = $resultado['name'];
    $lastname = $resultado['last_name'];
    $semestre = $resultado['semestre'];
    $carrera = $resultado['CARRERA'];
    $nctrl = $resultado['nctrl'];
    $id = $resultado['id'];
    $correo = $resultado['email'];
    $arrayData = array($name, $lastname, $semestre, $carrera, $nctrl, $correo, $id);
    ?>
</div>
 <section class="titulo">
         <h1>Registrar fecha de examen.</h1>
        </section>      
        <section class="indicaciones">
         <p class="text indicacion-fecha">Completa los datos siguientes para llevar a cabo el registro de tu examen en la fecha indicada. Para completar los datos es necesario que cuentes con tu recibo de pago.</p>
        </section>
        <section class="formulario">
          <form id="formulario" style="display: block;" role="form" >
                <div class="container">
                  <div class="row pt">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="form-group">
                              <label for="FolioP" class="control-label">Folio de pago:</label>
                                <div class="input-group">
                                 <div class="input-group-addon" >
                                    <span class="icon-credit-card icon" ></span>
                                 </div>
                                 <input type="text" name="FolioP" id="FolioP" tabindex="1" class="form-control" placeholder="Folio de pago" >
                                </div>
                                <span class="help-block" id="error"></span>                     
                            </div>
                  </div>
                    <div class="col-xs-12 col-sm-4">
                      <label for="fechaP">Fecha de pago(Recibo):</label><br>
                        <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" ></span></div>
                      <input type="datetime-local" name="fechaP" id="fechaP" class="form-control" id="fechaP" value="" placeholder="" >
                       </div>
                     <span class="help-block" id="error"></span>                     
                     </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                      
                    </div>
                  </div>
                <hr/>           
                <h4 id="fechaV">¡Verifica que tus datos sean correctos antes de registrar la fecha de tu examen! </h4>
                  <div class="row pt">
                     <div class="col-xs-12 col-sm-4 ">
                         <label for="nombre">Nombre(s):</label><br>
                         <div class="form-group">
                          <div class="input-group">
                           <div class="input-group-addon"><span class="glyphicon glyphicon-user" id="Correos"></span></div>
                              <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $resultado['name']; ?> " readonly="true">
                            </div>
                            <span class="help-block" id="error"></span>                     
                           </div>
                          </div>
                    <div class="col-xs-12 col-sm-4">
                       <div class="form-group">
                      <label for="Apellidos">Apellidos:</label><br>
                      <input type="text" name="Apellidos" id="Apellidos" class="form-control" value="<?php echo $resultado['last_name']; ?>" readonly="true">
                    </div>
                    <span class="help-block" id="error"></span>    
                    </div>
                     <div class="col-xs-12 col-sm-4">
                        <label>Correo electrónico:</label><br>
                        <div class="form-group">
                          <div class="input-group">
                             <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" id="Correos"></span></div>
                                <input name="email" type="text" id="email" class="form-control" placeholder="Correo electrónico"
                                 value="<?php echo $resultado['email']; ?>" readonly="true">
                              </div> 
                              <span class="help-block" id="error"></span>                     
                            </div>
                          </div> 
                       </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <label>Número de control:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-credit-card icon"></span></div>
                        <input type="text" name="Nctrl" id="Nctrl" class="form-control" value="<?php echo $resultado['nctrl']; ?>" readonly="true">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <label>Semestre:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-list-numbered icon"></span></div>
                      <input type="text" id="Semestre" name="Semestre" class="form-control" value="<?php echo $resultado['semestre']; ?>" readonly="true">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                          <label>Carrera</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-book icon"></span></div>
                       <input type="text" name="Carrera" id="Carrera" class="form-control" value="<?php echo $resultado['CARRERA']; ?>" readonly="true">
                    </div>
                  </div>
                </div>
              
              <div class="row pt">
                <div class="col-xs-12 col-sm-4">
                  <label for="Fechas" class="control-label">Fechas disponibles:</label>
                <input type="text" name="Fechas" id="Fechas" class="form-control" 
                placeholder="Seleccione fecha" read-only="false">
                </div>
              </div>
              </div>
              <label name="Userid" id="Userid" hidden=true><?php echo $resultado['id']; ?> </label>
              <div class="row btn-Registro">
              <button type="submit" class="btn btn-success btn-lg boton" id="btnRegistroExamen" name="btnRegistro">
                 <span class="glyphicon glyphicon-pencil RegistroExamen" ></span> Registrar
                 </button> 
              </div>    
          </form>
         
        </section>
        <div class="alert alert-info">
          <p>
            <strong>Pruebas.</strong> En este formulario solamente es necesario capturar el folio de pagó,
            la fecha y hora en que se pago y una fecha registrada para realizar el examen. <br>
            <strong>Datos ejemplo</strong>:
            <ul>
              <li><strong>Folio:</strong> 9685321475</li>
              <li><strong>Fecha y hora:</strong> 30/01/2019 23:59</li>
              <li><strong>Fecha de examen:</strong> 2019/01/23</li>
            </ul>
            <strong>Importante!</strong> La fecha de examen debe ser alguna de las registradas en el sistema como 
            fecha de examen para ser aceptada, las fechas aceptadas en el sistema actualmente son: 
            <ul>
              <li>2019/01/23</li>
              <li>2019-01-01</li>
              <li>2018-05-08</li>
            </ul>
          </p>
        </div>

        <script>
        var datos =['<?php echo implode("','", $arrayData); ?>'];
        var nombre  = document.getElementsByName("name").value;
        console.log(nombre);
       
        </script>
    <?php 
    include_once 'php/footerHTML.php';
    ?>
<!doctype html>
 <html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles|Registro.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
 
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
<!--menu -->
<div class="header menu">
    <?php
    session_start();
            ob_start();
             
            //         if($_SESSION['sesion_exito']==0) //Como dije en el video, esto no es estrictamente necesario
            //          {echo "inicie sesion por favor";

            //            header('Location:index.php'); 
            //          } //Ya que si lo dejamos, siempre que accedemos a index arroja error.
            //         if($_SESSION['sesion_exito']==2)
            //             {echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');</script>";}
            //         if($_SESSION['sesion_exito']==3)
            //             {echo "<script type=\"text/javascript\">alert('Usuario o Contraseña incorrectos.');</script>";}
    include 'menuUsuario.php';
    include ('php/DatosUsuario.php');
    include ('Conexion.php');
   $funcion = new DatosUsuario;         
      $email= $funcion->UsuarioId($_SESSION['emailUser']);
     // $email= $funcion->UsuarioId('cesar.lopez@tectijuana.edu.mx');
      //consulta de datos 
      $Consulta= "SELECT alumno.name,alumno.last_name,alumno.nctrl,alumno.CARRERA,usuario.email,
       alumno.semestre, alumno.id FROM alumno INNER JOIN usuario where usuario.id_alumno=alumno.id and usuario.email='$email'";
       $resultados = mysqli_query($conexion,$Consulta);
       //ASIGNACION DE RESULTADOS
       $resultado = mysqli_fetch_array($resultados);
      //CONSULTA PARA FECHAS DISPONIBLES
       $FechaConsulta="SELECT*FROM $Fechas";
       $fechaResultado=mysqli_query($conexion,$FechaConsulta);
    ?>
</div>
 <section class="titulo">
         <h1>Resgistrar fecha de examen.</h1>
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
                <h4 id="fechaV">Verifica que tus datos sean correctos antes de registrar la fecha de tu examen!. </h4>
                  <div class="row pt">
                     <div class="col-xs-12 col-sm-4 ">
                         <label for="nombre">Nombre(s):</label><br>
                         <div class="form-group">
                          <div class="input-group">
                           <div class="input-group-addon"><span class="glyphicon glyphicon-user" id="Correos"></span></div>
                              <input type="text" name="nombre" class="form-control" value="<?php echo $resultado['name'];?> ">
                            </div>
                            <span class="help-block" id="error"></span>                     
                           </div>
                          </div>
                    <div class="col-xs-12 col-sm-4">
                       <div class="form-group">
                      <label for="Apellidos">Apellidos:</label><br>
                      <input type="text" name="Apellidos" class="form-control" value="<?php echo $resultado['last_name'];?>">
                    </div>
                    <span class="help-block" id="error"></span>    
                    </div>
                     <div class="col-xs-12 col-sm-4">
                        <label>Correo electronico:</label><br>
                        <div class="form-group">
                          <div class="input-group">
                             <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" id="Correos"></span></div>
                                <input name="email" type="text" class="form-control" placeholder="Correo electronico"
                                 value="<?php echo $resultado['email'];?>">
                              </div> 
                              <span class="help-block" id="error"></span>                     
                            </div>
                          </div> 
                       </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <label>Numero de control:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-credit-card icon"></span></div>
                        <input type="text" name="Nctrl" id="Nctrl" class="form-control" value="<?php echo $resultado['nctrl'];?>">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <label>Semestre:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-list-numbered icon"></span></div>
                      <input type="text" name="Semestre" class="form-control" value="<?php echo $resultado['semestre'];?>">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                          <label>Carrera</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-book icon"></span></div>
                       <input type="text" name="Carrera" class="form-control" value="<?php echo $resultado['CARRERA'];?>">
                    </div>
                  </div>
                </div>
              
              <div class="row pt">
                <div class="col-xs-12 col-sm-4">
                  <label for="Fechas" class="control-label">Fechas disponibles:</label>
                <input type="text" name="Fechas" id="Fechas" class="form-control" 
                placeholder="Seleccione fecha">
                </div>
              </div>
              </div>
              <label name="Userid" id="Userid" hidden=true><?php echo $resultado['id'];?> </label>
              <div class="row btn-Registro">
              <button type="submit" class="btn btn-success btn-lg boton" id="btnRegistro" name="btnRegistro">
                 <span class="glyphicon glyphicon-pencil RegistroExamen" ></span> Registrar
                 </button> 
              </div>    
          </form>
         
        </section>
 <footer class="app-footer">
            <div class="app-texto">
                <h4>Instituto nacional de Mexico</h4>
                <h5>Instituto Tecnologico de Tijuana</h5>
                <p>Calzada Del Tecnológico S/N, Fraccionamiento Tomas Aquino. Tijuana, Baja California.<br/> 
                     C.P. 22414 Teléfono: +52 (664) 607 8400<br/></p>
                     <img src="img/galgo.gif" class="img-responsive img-footer">
            </div>
        </footer>
           <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
    </html>
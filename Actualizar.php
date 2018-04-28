<!doctype html>
 <html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles|Registro.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/icomoon.css">
         <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <?php 
           session_start();
           ob_start();
        include ('php/DatosUsuario.php');
        include ('Conexion.php');
        //creacion de objeto para clase
         $funcion = new DatosUsuario;  
         //llamada a funcion       
         $email= $funcion->UsuarioId($_SESSION['emailUser']);
        //consulta de datos
        $Consulta= "SELECT alumno.name,alumno.last_name,alumno.nctrl,alumno.CARRERA,usuario.email,
        alumno.semestre, alumno.id FROM alumno INNER JOIN usuario where usuario.id_alumno=alumno.id and usuario.email='$email'";
        $resultados = mysqli_query($conexion,$Consulta);
        //ASIGNACION DE RESULTADOS
        $resultado = mysqli_fetch_array($resultados);
        ?>
    <div class="menu">
    <?php include 'menuUsuario.php'; ?>
    </div>
    <h3 class="Fecha-Titulo">Actualizacion de datos.</h3>
 
    <div class="container">
        <p class="intro">Realice unicamente las correcciones en los datos con errores, si los datos estan correctos
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
                        <label>Correo electronico:</label><br>
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
                    <label>Numero de control:</label><br>
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
<!doctype html>

 <html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles|Registro.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        
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
          
                          //consulta de datos 
                          $Consulta= "SELECT alumno.name,alumno.last_name,alumno.nctrl,alumno.CARRERA,usuario.email,
                           alumno.semestre FROM alumno INNER JOIN usuario where usuario.id_alumno=alumno.id and usuario.email='$email'";
                           $resultados = mysqli_query($conexion,$Consulta);
                           //ASIGNACION DE RESULTADOS
                           $resultado = mysqli_fetch_array($resultados);
                           //despliegue de datos primera columna   
                        $datos1 =" <label class='letra-datos'>Nombre(s):".$resultado['name']." </label><br>
                        <label class='letra-datos'>Apellidos: ".$resultado['last_name']." </label><br>
                        <label class='letra-datos'>Carrera: ".$resultado['CARRERA']." </label><br>";
                        //despliegue de datos segunda columna
                        $datos2 =" <label class='letra-datos'>Numero de control: ".$resultado['nctrl']."</label><br>
                        <label class='letra-datos'>Semestre: ".$resultado['semestre']."</label><br>
                        <label class='letra-datos'>Correo: ".$resultado['email']."</label><br>";              
?>
    <div class="container mover caja" >
        <div class="row contiene-datos">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                    <img src="img/user.png" alt="usuario" name="usuario" class=" foto-usuario">
                </div>
                <div class="col-sm-4 col-lg-4">
                    <?php echo $datos1;?>
                </div>
                <div class="col-sm-4 col-lg-4"> 
                <?php echo $datos2;?>               
                </div>
            </div>
        </div>
    </div>
<br>
 <footer class="app-footer ">
            <div class="app-texto container-fluid ">
                <h4>Instituto nacional de Mexico</h4>
                <h5>Instituto Tecnologico de Tijuana</h5>
                <p>Calzada Del Tecnológico S/N, Fraccionamiento Tomas Aquino. Tijuana, Baja California.<br/> 
                     C.P. 22414 Teléfono: +52 (664) 607 8400<br/></p>
                     <img src="img/galgo.gif" alt="galgo" class="galgo">
            </div>
          
    </footer>
           <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

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
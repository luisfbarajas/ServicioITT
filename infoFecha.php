<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles.|Inicio</title>
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
       include ("conexion.php");
            session_start();
            ob_start();
                if(isset($_SESSION['sesion_exito']))
                {
                    //if($_SESSION['sesion_exito']==0) Como dije en el video, esto no es estrictamente necesario
                    // {echo "inicie sesion por favor";} Ya que si lo dejamos, siempre que accedemos a index arroja error.
                    if($_SESSION['sesion_exito']==2)
                        {echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');</script>";}
                    if($_SESSION['sesion_exito']==3)
                        {echo "<script type=\"text/javascript\">alert('Usuario o Contraseña incorrectos.');</script>";}
                }
                else
                {
                    $_SESSION['sesion_exito']=0;
                }
       
                ?>
       <div class="header">
        <?php include 'menu.php'; ?>
       </div>
       <br/>
       <br/> 
   <header class="masthead text-center text-white d-flex border-0 header" style="background-image: url('img/infoFechas.jpg'); width: 100%;" >
      <div class="container my-auto">
        <div class="row">
          
          <div class="">
         
            <h1 class="text-uppercase">
              <img src="img/logo.png"><br/>
              <p> Instituto Nacional de Mexico.</p><br/>
            </h1>
            <h3>Instituto Tecnologico de Tijuana</h3>
            <hr>
          </div>
          <div >
            <b><p class="proceso-texto">Fechas de examen.</p></b>
            
          </div>
        </div>
      </div>
    </header>


 <!--ventana modal para login -->
     <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Iniciar sesion.</h4>
        </div>
        <div class="modal-body">
      

			<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-0">
				<div class="panel panel-login" style="border-color: green;">
				<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
				<form class="login-form " style="display: block;" role="form" action="sesion.php" method="POST">
				<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Recordarme</label><br/>
										<a href="registro.php">Registrarse.</a>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login" id="login" tabindex="4" class="form-control btn btn-success" value="Iniciar sesión">
											</div>
										</div>
									</div>
					</form>			
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
    	</div>
        </div>   
      </div>     
    </div>
  </div>
<div class="container">
 <b> <h3 class="Fecha-Titulo">Fechas de examen</h3></b><br>
  <p class="Fecha-Texto">Las Fechas de los examenes de ingles estan programadas en la fecha y lugar especificados. En cada fecha se cuenta con diferentes horarios en los cuales se puede presentar el examen para que se tenga la flexibilidad necesaria en cuanto horario se refiere.

  A continuacion se muestran las fechas de examenes disponibles en el semestre en curso.</p><br>
    <?php 
        $Consulta=mysqli_query($conexion,"SELECT * FROM $Fechas ");    
           //ciclo para la lectura de datos de la consulta      
        $tabla="<table class=\"table table-striped table-hover table-condensed\" >
              <thead>
              <tr>
                <th>Fecha</th>
                <th>Horario</th>
                <th>Salon</th>
                <th>Unidad</th>
              </tr>
              </thead>";
              //ciclo de consulta 
         while($row = mysqli_fetch_array($Consulta))
            {             
                  $tablabody="<tbody>
                      <tr>
                        <td>".$row["Fecha"]."</td>
                        <td>".$row["Horario"]."</td>
                        <td>".$row["Salon"]."</td>
                        <td>".$row["unidad"]."</td>
                     </tr>
                 </tbody>";            
            }    
             echo $tabla;
             echo $tablabody;
             echo "<br><br><br>";
      ?>
</div>

<div class="container" >
  <div class="row">
    
  </div>
</div>
    <footer class="app-footer">
            <div class="app-texto">
                <h4>Instituto nacional de Mexico</h4>
                <h5>Instituto Tecnologico de Tijuana</h5>
                <p>Calzada Del Tecnológico S/N, Fraccionamiento Tomas Aquino. Tijuana, Baja California.<br/> 
                     C.P. 22414 Teléfono: +52 (664) 607 8400<br/></p>
                     <img src="img/galgo.gif">
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

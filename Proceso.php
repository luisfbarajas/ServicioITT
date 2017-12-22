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
      </div><br/><br/>





  <header class="masthead text-center text-white d-flex border-0 proceso" style="background-image: url('img/proceso.jpg')" >
      <div class="container my-auto">
   
          <div class="Proceso-intro" >
         
            <h1 class="text-uppercase">
              <img src="img/logo.png"><br/>
              <p> Instituto Nacional de Mexico.</p><br/>
            </h1>
            <h3>Instituto Tecnologico de Tijuana</h3>
            <hr>
          </div>
          <div class="Proceso-intro" >
            <p class="proceso-texto">Proceso para realizar tu examen de ingles .</p>
          
          </div>
        </div>
      </div>
    </header>

  <section class="indicaciones">
    	<div class="titulo">Proceso.</div>
    	<p class="proceso-texto">Para poder realizar tu examen de ingles simplemente hay que seguir estos sencillos pasos.</p>
    </section>
    <section class="Paso1">
	<div class="container">
		<div class="row">
	
		<div class="col-xs-12 col-sm-1">
			<span class="numero">#1</span>
		</div>
		<div class="col-xs-12 col-sm-7">
			<h4 class="titulo-pasos">Realiza tu pago.</h4>
			<p class="paso1-texto">Con tu numero de control, acude al departamento de servicios financieros del <span class="tec"><b>Instituto Tecnologico de Tijuana</b></span> y realiza el pago correspondiente. Es importante que <span class="text-danger"><b>conserve su comprobante</b></span> ya que contiene datos que seran necesarios mas adelante.</p>
		</div>
		<div  class="ccol-xs-12 col-sm-4">
			<img src="img/pago.png" class="img-responsive ">
		</div>
	
	</div>
	</div>
</section>
<br>
<section class="Paso2">
		<div class="container">
		<div class="row">
	
		<div class="col-xs-12 col-sm-4">
				<img src="img/inscribite.png" class="img-responsive " style="height: 60%; width: 60%;">
		</div>
		<div class="col-xs-12 col-sm-7">
			<h4 class="titulo-pasos">Registrate en linea.</h4>
			<p class="paso1-texto">Lleva a cabo tu registro en la pagina para poder acceder y registrarte en la fecha que deseas. Recuerda Unicamente puedes <span class="text-danger"><b>utilizar correo institucional para registrarte</b></span>. Si no cuentas con tu correo institucional solicitalo cuanto antes!.</p>
		</div>
		<div  class="ccol-xs-12 col-sm-1">
			<span class="numero">#2</span>
		</div>
	</div>
	</div>
</section>
<br>
<section class="Paso1">
	<div class="container">
		<div class="row">
	
		<div class="col-xs-12 col-sm-1">
			<span class="numero">#3</span>
		</div>
		<div class="col-xs-12 col-sm-7">
			<h4 class="titulo-pasos">Escoje la fecha.</h4>
			<p class="paso1-texto">Ingresa y escoje la fecha para presentar tu examen.<br><span class="text-danger"><b>Importante Recuerda:</b></span></p>
			<ul class="paso1-texto">
				<li>Una vez que se escojiste la fecha no podras cambiarla.</li>
				<li>El cupo es limitado a 30 alumnos por fecha.</li>
			</ul>
		</div>
		<div  class="ccol-xs-12 col-sm-4">
			<img src="img/fecha.jpg" class="img-responsive ">
		</div>
	
	</div>
	</div>
</section>
<br>
<section class="Paso2">
		<div class="container">
		<div class="row">
	
		<div class="col-xs-12 col-sm-4">
				<img src="img/examen.jpg" class="img-responsive " style="height: 60%; width: 60%; margin-top: 10px;">
		</div>
		<div class="col-xs-12 col-sm-7">
			<h4 class="titulo-pasos">Preparate.</h4>
			<p class="paso1-texto">Una vez que completaste el registro, solamente queda esperar la fecha que escojiste para tu examen. Estudia lo que creas necesario para aprobar. El dia de tu examen recuerda llevar tu recibo de pago, tu lapiz y borrador, es importante <span class="text-danger"><b>llegar 15 minutos antes</b></span> de la hora que se te cito.</p>
		</div>
		<div  class="ccol-xs-12 col-sm-1">
			<span class="numero">#4</span>
		</div>
	</div>
	</div>
</section>

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

<br>


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

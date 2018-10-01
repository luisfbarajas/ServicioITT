
<?php
include_once 'php/headerHTML.php';
?>
       
         <div class="header">
       <?php include 'menu.php'; ?>
      </div><br/><br/>       
        <b> <h2 class="Fecha-Titulo pt">Proceso para realizar tu examen de ingles.</h2></b>

  <section class="indicaciones">
    	
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
				<li>El cupo es limitado a 25 alumnos por fecha.</li>
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
			<p class="paso1-texto">Una vez que completaste el registro, 
				solamente queda esperar la fecha que escojiste para tu examen.
				  El dia de tu examen recuerda llevar tu recibo de pago y una identificacion, es importante <span class="text-danger"><b>llegar 15 minutos antes</b></span> de la hora que se te cito.</p>
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


  
  <?php 
	include_once 'php/footerHTML.php';

	?>
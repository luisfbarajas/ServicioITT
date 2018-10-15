<?php
include_once 'php/headerHTML.php';
?>

         <div class="header">
       <?php include 'menu.php'; ?>
      </div><br/><br/>
   <header class="masthead text-center text-white d-flex border-0 header" style="background-image: url('img/fondo-itt.jpg')" >
      <div class="container my-auto">
        <div class="row" >
          <div class="col-md-6 col-sm-6 col-lg-6">
          <img src="img/logoteca.png" alt="Logo TecNac" class="img-responsive logotecna" >
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6" >       
              <img src="img/logo.png" alt="logoitt" class="img-responsive logoitt" ><br/>
          </div>
        </div>
        <h3>Instituto Tecnologico de Tijuana</h3>
        <hr>                
        <p class="intro">Registrate en linea para realizar tu examen de ingles.</p>
        <div class="boton">
          <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Ingresar</button>
    </header>
<div class="row border-0">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="infoFecha.php">
        <img src="img/fechas.jpg" alt="fechas">
        <div class="caption">
          <h4 style="text-align: center;">Fechas.</h4>
          <p>Ingresa y consulta las fechas en las disponibles para realizar tu examen de ingles, escoje la mas conveniente!</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail border-0">
      <a href="registro.php ">
        <img src="img/registro.png" alt="registro" >
        <div class="caption">
          <h4 style="text-align: center;">Registro.</h4>
          <p>¿Aun no te registras?. Que esperas no tomas mas de 5 minutos de tu tiempo.</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="Proceso.php">
        <img src="img/requisitos.jpg" alt="Requisitos" >
        <div class="caption">
          <h4 style="text-align: center;">Proceso.</h4>
          <p>Verifica cual es el proceso a seguir para presentar tu examen.</p>
        </div>
      </a>
    </div>
  </div>
</div>
    <?php
    include_once 'php/footerHTML.php';
    ?>
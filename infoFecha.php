<!doctype html>
 <html class="no-js" lang="es"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles.|Inicio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
       <?php
          include ("Conexion.php");                
         ?>
       <div class="header">
        <?php include 'menu.php'; ?>
       </div>
       <br/>
       <br/> 
       <header class="masthead text-center text-white d-flex border-0 header" style="background-image: url('img/infoFechas.jpg'); width: 100%;" >
           <div class="container my-auto">
              <div class="row">         
                 <h1 class="text-uppercase">
                 <img src="img/logo.png" alt="logo"><br/>
                 <p> Instituto Nacional de Mexico.</p><br/>
                 </h1>
                 <h3>Instituto Tecnologico de Tijuana</h3>
                 <hr>
   
                 <div >
                    <b><p class="proceso-texto">Fechas de examen.</p></b>
            
                 </div>
              </div>
           </div>
       </header>

    <div class="container">
     <b> <h3 class="Fecha-Titulo">Fechas de examen</h3></b><br>
      <p class="Fecha-Texto">Las Fechas de los examenes de ingles estan programadas en la fecha y lugar especificados. En cada fecha se cuenta con diferentes horarios en los cuales
       se puede presentar el examen para que se tenga la flexibilidad necesaria en cuanto horario se refiere.
      A continuacion se muestran las fechas de examenes disponibles en el semestre en curso.</p><br>      
          <div class="row" >
             <?php 
             $Consulta=mysqli_query($conexion,"SELECT * FROM $Fechas ");    
               //ciclo para la lectura de datos de la consulta      
             echo $tabla="<table class=\"table table-striped table-hover \" >
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
                     echo $tablabody="
                          <tr>
                            <td>".$row["FECHA"]."</td>
                            <td>".$row["HORARIO"]."</td>
                            <td>".$row["SALON"]."</td>
                            <td>".$row["UNIDAD"]."</td>
                         </tr>";    
                }                
                 echo "</table><br><br>";
           ?>
          </div>
    </div>
<footer class="app-footer">
  <div class="app-texto">
   <h4>Instituto nacional de Mexico</h4>
   <h5>Instituto Tecnologico de Tijuana</h5>
   <p>Calzada Del Tecnológico S/N, Fraccionamiento Tomas Aquino. Tijuana, Baja California.<br/> 
      C.P. 22414 Teléfono: +52 (664) 607 8400<br/></p>
   <img src="img/galgo.gif" alt="galgo">
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

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles|Registro.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
   <link href="styles/glDatePicker.default.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        
<?php 
 
            session_start();
            ob_start();
             
                    if($_SESSION['sesion_exito']==0) //Como dije en el video, esto no es estrictamente necesario
                     {echo "inicie sesion por favor";

                       header('Location:index.php'); 
                     } //Ya que si lo dejamos, siempre que accedemos a index arroja error.
                    if($_SESSION['sesion_exito']==2)
                        {echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');</script>";}
                    if($_SESSION['sesion_exito']==3)
                        {echo "<script type=\"text/javascript\">alert('Usuario o Contraseña incorrectos.');</script>";}
               
                
echo "Entro";
?>
<!--menu -->
<div class="header">
    <?php
    include 'menuUsuario.php';
    ?>
</div>

<br><br>












   
        <section class="titulo">
         <h1>Resgistrar fecha de examen.</h1>
        </section>
        
        <section class="indicaciones">
         <p class="text indicacion-fecha">Completa los datos siguientes para llevar a cabo el registro de tu examen en la fecha indicada. Para completar los datos es necesario que cuentes con tu recibo de pago.</p>
        </section>

        <section class="formulario">
          <form id="formulario" style="display: block;" role="form">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                      <label for="FolioP">Folio de pago (Recibo):</label><br>
                      <input type="text" name="FolioP" class="form-control">
                    </div>
                    <div class="col-xs-12 col-sm-4">
                      <label for="fechaP">Fecha de pago(Recibo):</label><br>
                        <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" id="Correos"></span></div>
                      <input type="Date" name="fechaP" class="form-control" >
                       </div>
                     <span class="help-block" id="error"></span>                     
                     </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                      
                    </div>
                  </div>
                </div>






                   <div class="container">
                  <div class="row">
                            <div class="col-xs-12 col-sm-4">
                              <label for="nombre">Nombre(s):</label><br>
                                <div class="form-group">
                           <div class="input-group">
                           <div class="input-group-addon"><span class="glyphicon glyphicon-user" id="Correos"></span></div>
                              <input type="text" name="nombre" class="form-control">
                            </div>
                             <span class="help-block" id="error"></span>                     
                             </div>
                               </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                      <label for="Apellidos">Apellidos:</label><br>
                      <input type="text" name="Apellidos" class="form-control">
                    </div>
                    <span class="help-block" id="error"></span>    
                  </div>
                                                <div class="col-xs-12 col-sm-4">
                                                  <label>Correo electronico:</label><br>
                                                 <div class="form-group">
                                               <div class="input-group">
                                               <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" id="Correos"></span></div>
                                               <input name="email" type="text" class="form-control" placeholder="Correo electronico">
                                               </div> 
                                               <span class="help-block" id="error"></span>                     
                                                </div>
                                               </div>
                      
                    </div>
                  </div>






              <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <label>Numero de control:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-credit-card icon"></span></div>
                        <input type="text" name="Nctrl" class="form-control">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <label>Semestre:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-list-numbered icon"></span></div>
                      <input type="text" name="Nctrl" class="form-control">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                          <label>Carrera</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="icon-book icon"></span></div>
                       <input type="text" name="Nctrl" class="form-control">
                    </div>
                  </div>
                </div>
              </div>


 <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <label for="fExamen">Fecha de examen:</label><br>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
                        <input type="text" name="fExamen" id="mydate" gldp-id="mydate" class="form-control"  >
                        </div>
                         <div gldp-el="mydate" style="width:250px; height:150px;  ">
                           </div>
                    </div>
                   
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <label></label><br>
                   <!-- <div class="input-group">
                      <div class="input-group-addon"><span class="icon-list-numbered icon"></span></div>
                      <input type="text" name="Nctrl" class="form-control">
                    </div>-->
                  </div>
                  <div class="col-xs-12 col-sm-4">
                          <label></label>
                   <!-- <div class="input-group">
                      <div class="input-group-addon"><span class="icon-list-numbered icon"></span></div>
                      <input type="text" name="Nctrl" class="form-control">
                    </div>-->
                  </div>
                </div>
              </div>

          </form>

        </section>


<div class="container">
                <div class="row">
              
               <button type="submit" class="btn btn-success btn-lg boton">
                 <span class="glyphicon glyphicon-pencil"></span> Registrar
                 </button>
               
                </div>
              </div><br>






    

















       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/glDatePicker.min.js"></script>

    <script type="text/javascript">
        $(window).load(function()
        {
            $('mydate').glDatePicker();
           
        });
        var example5 = $('#mydate').glDatePicker(
    {
        
      // showAlways: true,
        //inabilita columnas de fechas
         selectableDOW: [2,4],
         //nombres del mes
         monthNames: ['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         //nombre de los dias
         dowNames:['Dom','Lun','Mar','Mier','Jue','Vie','Sab'],
         

    
    }).glDatePicker(true);
    </script>
























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
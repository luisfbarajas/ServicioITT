<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles|Home.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

     <body>  
<div id="header">
    <?php include 'menu.php'; ?>
</div> <br/><br/><br/>
      <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login" style="border-color: green;">
    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
<form class="login-form " action="insercion.php" style="display: block;" role="form" name="form" method="POST">
                <div class="form-group">
                <label for="nombre">Nombre(s):</label>
                                        <input type="text" name="Nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre" value="">
                                        <label for="Apellido">Apellidos:</label>
                                        <input type="text" name="Apellido" id="Apellido" tabindex="2" class="form-control" placeholder="Apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="NCtrl">Número  de control:</label>
                                        <input type="text" name="NCtrl" id="NCtrl" tabindex="3" class="form-control" placeholder="Número  de control.">
                                        <label for="Carrera">Carrera:</label>
                                          <select class="form-control" id="Carrera" tabindex="4" name="Carrera">
                                              <option value="Arquitectura">Arquitectura</option>
                                              <option value="contador publico">Contador publico</option>
                                              <option value="IAB">Ing. Ambiental</option>
                                              <option value="IBM">Ing.Biomedica</option>
                                              <option value="IBQ">Ing. Bioquimica</option>
                                              <option value="IC">Ing. Civil</option>
                                              <option value="IEM">Ing.Electromecanica</option>
                                              <option value="IET">Ing. Electronica</option>
                                              <option value="IAT">Ing. En aeronautica</option>
                                              <option value="IDI">Ing. En diseño industrial</option>
                                              <option value="IGE">Ing. Gestion Empresarial</option>
                                              <option value="IIF">Ing. Informatica</option>
                                              <option value="IEL">Ing. En Logistica</option>
                                              <option value="IEN">Ing. En Nanotecnologia</option>
                                              <option value="ISC">Ing. En Sistemas Computacionales</option>
                                              <option value="TIC">Ing. En Tecnologias de la informacion y comunicaciones</option>
                                              <option value="IDT">Ing. Industrial</option>
                                              <option value="IQ">Ing. Quimica</option>
                                              <option value="IM">Ing. Mecanica</option>
                                              <option value="LEA">Lic. En Administracion</option>
                                        </select>
                                        <label for="Semestre">Semestre:</label>
                                         <select class="form-control" id="Semestre" tabindex="5" name="Semestre">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Correo electrónico :</label>
                                        <input type="email" name="correo" id="email" class="form-control" placeholder="Correo electrónico" tabindex="6">
                                    </div>

                                    <div class="form-group">
                                    <label for="password"> Contraseña:</label>
                                        <input type="password" name="password" id="password" tabindex="7" class="form-control" placeholder="Contraseña" >
                                        <label for="passconfirm">Confirme contraseña:</label>
                                        <input type="password" name="passconfirm" id="passconfirm" tabindex="8" placeholder="Confirmar" class="form-control" >
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="button" name="login" id="login" tabindex="9" class="form-control btn btn-success" value="Registrar" onclick="pregunta();" >
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
<script>

    function pregunta(){
        if(confirm('Se guardaran los datos. ¿Desea continuar?.')){
                document.form.submit() 
        }else{

        }


}



</script>












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

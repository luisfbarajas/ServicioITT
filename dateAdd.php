<?php include 'Conexion.php'; ?>
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
         <link href="styles/glDatePicker.default.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    <div class="container-fluid menu">
    <?php include 'menuAdmin.php'; ?>
    </div>
    <div class="container">
        <h2 class="Fecha-Titulo">Agregar fecha.</h2>
        <p class="Fecha-Texto">
            Lleve a cabo el alta de nuevas fechas añadiendo los datos correspondientes. 
            Estas fechas agregadas se veran reflejadas al momento de guardar los datos.
            <span class="text-danger"><b>No olvide guardar antes de salir</b></span>
        </p>
        <br>
        <div id="msj" style="display: none"></div>
        
        <form>
            <div class="row">
                <!--FECHA -->
                <div class="col-md-3">
                    <label for="txtFecha" class="label-control">Fecha: </label>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar" ></i>
                             </div>
                            <input type="date" name="txtFecha" id="txtFecha" class="form-control" >
                        </div>
                        <span class="help-block" id="error"></span>                     
                    </div>
                </div>
                    
                   
                <!-- Horario -->               
                <div class="col-md-3">
                    <label for="txtHorario" class="label-control">Fecha: </label><br>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-time" ></i>
                                </div>
                                    <input type="time" name="txtHorario" id="txtHorario" class="form-control" >
                                </div>
                                <span class="help-block" id="error"></span>                     
                            </div>
                        </div>
                </div>
            
          
             <!--FECHA -->
             <div class="col-md-3">
                    <label for="txtFecha" class="label-control">Fecha: </label>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar" ></i>
                             </div>
                            <input type="date" name="txtFecha" id="txtFecha" class="form-control" >
                        </div>
                        <span class="help-block" id="error"></span>                     
                    </div>
                </div>
                    
                   
                <!-- Horario -->               
                <div class="col-md-3">
                    <label for="txtHorario" class="label-control">Fecha: </label><br>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-time" ></i>
                                </div>
                                    <input type="time" name="txtHorario" id="txtHorario" class="form-control" >
                                </div>
                                <span class="help-block" id="error"></span>                     
                            </div>
                        </div>
                </div>
            
            <!-- Unidad -->
            
            <!-- Cupo -->
            </div>
        </form>
    </div>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/main.js"></script>
    </body>
    </html>
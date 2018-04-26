<?php
include_once "php/getDates.php";
?>
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
   <h3 class="Fecha-Titulo">Agregar fecha.</h3>
    <p class="Fecha-Texto">
    Lleve a cabo el alta de nuevas fechas añadiendo los datos correspondientes.
    Estas fechas agregadas se veran reflejadas al momento de guardar los datos.
    <span class="text-danger"><b>No olvide guardar antes de salir.</b></span> 
    </p>
    <form>
        <div class="row">
            <!-- FECHA -->
            <div class="col-md-4 pt">
                <label for="txtAddFecha">Fecha:</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </div>
                        <input type="date" class="form-control" name="txtAddFecha" id="txtAddFecha">
                    </div>
                    <span class="help-block"></span>
                </div>      
            </div>
            <!-- HORA -->
            <div class="col-md-4 pt">
                <label for="txtAddHr" class="control-label">Hora:</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="glyphicon glyphicon-time"></i>
                        </div>
                        <input type="time" class="form-control" name="txtAddHr" id="txtAddHr">
                    </div>
                    <span class="help-block"></span>
                </div>
            </div>
            <!-- UNIDAD -->
            <div class="col-md-4 pt">
                <label for="txtAddUnidad" class="control-label">Unidad:</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="glyphicon glyphicon-place"></i>
                    </div>
                <select name="txtAddUnidad" id="txtAddUnidad" class="form-control">
                    <option value="Tomas aquino">Tomas Aquino</option>
                    <option value="Otay">Otay</option>
                </select>
                    </div>
                    <span class="help-block"></span>
                </div>
            </div>
            <!-- Salon -->
            <div class="col-md-4 pt">
                <label for="txtAddSalon" class="control-label">Salon:</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-"></i>
                    </div>
                    <input type="text" class="form-control" name="txtAddSalon" id="txtAddSalon">
                    </div>
                    <span class="help-block"></span>
                </div>
            </div>
            <div class="col-md-4 pt">
                <label for="txtAddCupo" class="control-label">Cupo:</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="glyphicon glyphicon-list"></i>
                        </div>
                        <input type="number" class="form-control" name="txtAddCupo" id="txtAddCupo">
                    </div>
                    <span class="help-block"></span>
                </div>
            </div>
        </div>
        <button type="submit" name="btnAddFecha" id="btnAddFecha" class="btn btn-success btn-md boton mt">
    <i class="glyphicon glyphicon-plus-sign"></i>&nbsp;  Agregar
    </button>
    </div> 
  
   </form>     
   <h3 class="boton pt">Fechas actuales.</h3>
   <div class="container" id="tablafechas">
   <?php  echo obtenerFecha();?>
   </div>
    <!-- VENTANA MODAL PARA EDICION DE DATOS -->
    <div class="modal fade" id="miModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
                </div>
                <div class="modal-body">
                    Texto del modal
                </div>
            </div>
        </div>
    </div>
   <!-- FIN MODAL -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"><script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/main.js"></script>
    </body>
    </html>
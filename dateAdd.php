<?php
session_start();
ob_start();

if ($_SESSION['sesion_exito'] == 0) {

    echo "inicie sesion por favor";


    header('Location:index.php');
}
if ($_SESSION['sesion_exito'] == 2) {
    echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');</script>";
}
if ($_SESSION['sesion_exito'] == 3) {
    echo "<script type=\"text/javascript\">alert('Usuario o Contraseña incorrectos.');</script>";
}
include_once "php/getDates.php";
include_once 'php/headerHTML.php';
?>

    <div class="container-fluid menu">
    <?php include 'menuAdmin.php'; ?>
    </div>
   <div class="container">
        <?php if (!$_GET || $_GET['accion'] == 1) : ?>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6">
                <h3 class="Fecha-Titulo">Agregar fecha.</h3>
                <p>
                Lleve a cabo el alta de nuevas fechas añadiendo los datos correspondientes.
                Estas fechas agregadas se veran reflejadas al momento de guardar los datos.
                <span class="text-danger"><b>No olvide guardar antes de salir.</b></span> 
                </p>
                <form>
                    <div class="">
                        <!-- FECHA -->
                        <div class="col-md-6 col-lg-6 pt">
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
                        <div class="col-md-6 col-lg-6 pt">
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
                        <div class="col-md-6 col-lg-6 pt">
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
                        <div class="col-md-6 col-lg-6 pt">
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
                        <div class="col-md-6 col-lg-6 pt">
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
                    <div class="col-md-12 col-lg-12 " >
                    <button type="submit" name="btnAddFecha" id="btnAddFecha" class="btn btn-success btn-md boton-add mt">
                    <i class="glyphicon glyphicon-plus-sign"></i>&nbsp;  Agregar
                    </button>
                    </div>
                   
                   
                </form>     
            </div>
            <?php endif ?>
            <?php if ($_GET && $_GET['accion'] == 2) : ?>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6">
                <h3 class="Fecha-Titulo">Editar fecha.</h3>
                <p>
                Lleve a cabo la edicion de los datos que necesite 
                <span class="text-danger"><b>No olvide guardar antes de salir.</b></span> 
                </p>
                <form>
                    <div class="">
                        <!-- FECHA -->
                        <div class="col-md-6 col-lg-6 pt">
                            <label for="txtEditFecha">Fecha:</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" name="txtEditFecha" id="txtEditFecha"
                                    value="<?php echo $vuelve['FECHA']; ?>">
                                </div>
                                <span class="help-block"></span>
                            </div>      
                        </div>
                        <!-- HORA -->
                        <div class="col-md-6 col-lg-6 pt">
                            <label for="txtEditHr" class="control-label">Hora:</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </div>
                                    <input type="time" class="form-control" name="txtEditHr" id="txtEditHr"
                                    value="<?php echo $vuelve['HORARIO']; ?>">
                                </div>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <!-- UNIDAD -->
                        <div class="col-md-6 col-lg-6 pt">
                            <label for="txtEditUnidad" class="control-label">Unidad:</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-place"></i>
                                </div>
                            <select name="txtEditUnidad" id="txtEditUnidad" class="form-control" >
                            <option value="<?php echo $vuelve['UNIDAD']; ?>"><?php echo $vuelve['UNIDAD']; ?></option>
                            <?php if ($vuelve['UNIDAD'] == 'Tomas aquino') : ?>
                                
                                <option value="Otay">Otay</option>
                                <?php endif ?>
                                <?php if ($vuelve['UNIDAD'] == 'Otay') : ?>
                                <option value="Tomas aquino">Tomas Aquino</option>
                                <?php endif ?>
                            </select>
                                </div>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <!-- Salon -->
                        <div class="col-md-6 col-lg-6 pt">
                            <label for="txtEditSalon" class="control-label">Salon:</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-"></i>
                                </div>
                                <input type="text" class="form-control" name="txtEditSalon" id="txtEditSalon" value="<?php echo $vuelve['SALON']; ?>">
                                </div>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 pt">
                            <label for="txtEditCupo" class="control-label">Cupo:</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-list"></i>
                                    </div>
                                    <input type="number" class="form-control" name="txtEditCupo" id="txtEditCupo"
                                    value="<?php echo $vuelve['cupo']; ?>">
                                </div>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 " >
                    <button type="submit" name="btnEditFecha" id="btnEditFecha" class="btn btn-success btn-md boton-add mt">
                    <i class="glyphicon glyphicon-pencil"></i>&nbsp;  Editar
                    </button>
                    </div>
                   
                   
                </form>     
            </div>
            <?php endif ?>
            <div class="" >
                <h3 class="boton pt">Fechas actuales.</h3>
                <div class="col-md-6 col-lg-6 col-sm-6" id="tablafechas">
                    <?php echo obtenerFecha(); ?>
                </div>
            </div>
        </div>  

    </div>
    <!--FOOTER -->
  
    <script>
    function abrir(url,url2){
        // location.href=url;
        // location.href=url2;
        alert("");
    }
    </script>
   <?php
    include_once 'php/footerHTML.php';
    ?>
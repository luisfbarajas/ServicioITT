<?php 

include_once 'php/headerHTML.php';
include_once 'menuAdmin.php';
include_once 'Conexion.php';
include_once 'php/getDataExamenAdmin.php';

$call = new dataExamenAdmin($conexion);
$dateData = $call->getdates();
$datesregister = $call->getFullData();
$table = null;
foreach ($datesregister as $row => $key) {
    $table .= "
    <tr>
        <td>{$key[0]}</td>
        <td> {$key[1]} </td>
        <td> {$key[2]} {$key[3]}</td>
        <td> {$key[4]} </td>
        <td> {$key[5]} </td>
        <td> {$key[6]} </td>
        <td> {$key[7]} </td>
    </tr>
    ";
}

?>

<h1 class="text-center mt-4">Examenes Registrados.</h1>
<div class="container">
    <div class="row">
        <p class="proceso-texto">Para mostrar los examanes registrados es necesario filtrarlos por fecha. Escoja la fecha de la cual desea 
        ver el registro.</p>
        <div class="col-md-12 col-lg-12 col-sm-12 col-ms-12">
            <div class="col-md-2 col-lg-1 col-sm-2">
                <label>Fecha:</label>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-4 fecha">
                <select name="fecha" id="fecha" class="form-control">
                    <?php 
                    foreach ($dateData as $date) {
                        echo "<option value='{$date}'> {$date} </option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
                <table id="example" class="display table table-striped" >
                    <thead>
                        <tr>
                            <th>Fecha de pago</th>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Número de control</th>
                        
                            <th>Carrera</th>
                            <th>Semestre</th>
                            <th>Fecha de examen</th>

                        </tr>
                    </thead>
                    <tbody>
                    <!-- Datos de la tabla -->
                            <?php echo $table; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Fecha de pago</th>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Número de control</th>
                            <th>Carrera</th>
                            <th>Semestre</th>
                            <th>Fecha de examen</th>
                        </tr>
                    </tfoot>
                </table>
        </div>
    </div>
</div>
<?php
include_once 'php/footerHTML.php';
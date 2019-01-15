<?php
include_once 'php/headerHTML.php';
include_once 'menuAdmin.php';
include_once 'php/readCal.php';
include_once 'Conexion.php';

$class = new readCal($conexion);
$data  = $class->calStudents();

?>
<div class="container mt-4">
<h2 class="text-center">Consulta de calificaciones</h2>
<p>
Consulte las calificaciones de los alumnos que han presentado examen, estas calificaciones fueron importadas
en la pagina de <a href="uploadCal.php">subir calificaciones</a>.
</p>
<div class="row mt-4">
    <div class="col-md-10 col-lg-10 col-sm-10">
        <table id="calificaciones" class="display table table-striped">
            <thead>
               <tr>
                <th>Numero de control</th>
                <th>Nombre</th>
                <th>Fecha de examen</th>
                <th>Calificacion</th>
               </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
                <th>Numero de control</th>
                <th>Nombre</th>
                <th>Fecha de examen</th>
                <th>Calificacion</th>
               </tr>
            </tfoot>
        </table>
    </div>
</div>
</div>
<?php
include_once 'php/footerHTML.php';
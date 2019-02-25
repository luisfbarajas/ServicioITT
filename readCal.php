<?php
include_once 'php/headerHTML.php';
include_once 'menuAdmin.php';
include_once 'php/readCal.php';
include_once 'Conexion.php';
//instancia a clase
$class = new readCal($conexion);
if($_GET){
$fecha = $_GET['fecha'];
$top = $_GET['top'];
$data  = $class->getFilterCal($fecha,$top);
$bodyTable = null;
foreach($data as $row => $key){
    $bodyTable.="
    <tr>
        <td>{$key[1]}</td>
        <td>{$key[2]}</td>
        <td>{$key[3]}</td>
        <td>{$key[4]}</td>
    </tr>
    ";
}
}else{

    $data  = $class->calStudents();
    $bodyTable = null;
    foreach($data as $row => $key){
        $bodyTable.="
        <tr>
            <td>{$key[1]}</td>
            <td>{$key[2]}</td>
            <td>{$key[3]}</td>
            <td>{$key[4]}</td>
        </tr>
        ";
    }
}


?>
<div class="container mt-4">
<h2 class="text-center">Consulta de calificaciones</h2>
<p>
Consulte las calificaciones de los alumnos que han presentado examen, estas calificaciones fueron importadas
en la página de <a href="uploadCal.php">subir calificaciones</a>.
</p>
<div class="row mt-4">
    <div class="col-md-10 col-lg-10 col-sm-10">
        <table id="calificaciones" class="display table table-striped">
            <thead>
               <tr>
                <th>Número de control</th>
                <th>Nombre</th>
                <th>Fecha de examen</th>
                <th>Calificación</th>
               </tr>
            </thead>
            <tbody>
                <?php echo $bodyTable;?>
            </tbody>
            <tfoot>
            <tr>
                <th>Número de control</th>
                <th>Nombre</th>
                <th>Fecha de examen</th>
                <th>Calificación</th>
               </tr>
            </tfoot>
        </table>
    </div>
</div>
</div>
<?php
include_once 'php/footerHTML.php';
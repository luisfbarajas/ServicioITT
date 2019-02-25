<?php
include_once 'Conexion.php';
include_once 'php/headerHTML.php';
include_once 'menuAdmin.php';
include_once 'php/DatosUsuario.php';

$class = new DatosUsuario();

$data = $class->getAllStudents('alumno', $conexion);

$bodyTable = null;
foreach ($data as $row => $key) {
    $bodyTable .= "
    <tr>
        <td>{$key[3]}</td>
        <td>{$key[2]} {$key[1]}</td>
        <td>{$key[4]}</td>
        <td>{$key[5]}</td>
        <td>{$key[9]}</td>
    </tr>
    ";
}

?>
<div class="container mt-4">
<h3 class="text-center">Alumnos registrados</h3>

<p class="text-justify">
El listado de alumnos que se refleja en esta página son <strong>TODOS</strong> los alumnos
que actualmente se encuentran registrados, teniendo fecha de examen programada o no.
</p>

<table class="mt-4 display table table-striped" id="calificaciones">
    <thead>
    <tr>
    <th>Número de control</th>
    <th>Nombre</th>
    <th>Carrera</th>
    <th>Semestre</th>
    <th>Correo</th>
    </tr>
    </thead>
    <tbody>
        <?php echo $bodyTable; ?>
    </tbody>
</table>
</div>
<?php
include_once 'php/footerHTML.php';
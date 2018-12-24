<?php
session_start();
ob_start();
include_once 'php/getDataExamen.php';
include_once 'Conexion.php';
if (isset($_GET)) {
    $id = $_GET['id'];
    $call = new DataExamen($id, $conexion);
    $data = $call->dataUser();
    $dateExamen = $call->getDateExamen();
}
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
require_once 'php/headerHTML.php';
require_once 'menuUsuario.php';
?>
<div class="container" style="margin-top:105px">
    <h3>Registro Exitoso.</h3><hr>
    <br/>
    <strong>
        <h4>Datos de registro</h4>
    </strong>
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-6">
            <strong>
                <label>
                    Nombre:&nbsp;
                </label>
            </strong>
            <p><?php echo "{$data['name']} {$data['last_name']}"; ?></p>
            <br>
            <strong>
                <label>
                    Número de control:&nbsp;
                </label>
            </strong>
            <p><?php echo $data['nctrl']; ?></p>
            <br> 
            <strong>
                <label>
                    Correo:&nbsp;
                </label>
            </strong>
            <p><?php echo $data['email']; ?></p>
            <br>
            </div>
            <div class="col-md-3"> 
                <strong>
                <label>
                    Carrera:&nbsp;
                </label>
            </strong>
            <p><?php echo $data['CARRERA']; ?></p><br>
            <strong>
                <label>
                    Semestre:&nbsp;
                </label>
            </strong>
            <p><?php echo $data['semestre']; ?></p> <br>
            <strong>
                <label>
                    Fecha de examen:&nbsp; 
                </label>
            </strong> 
            <p><?php echo $dateExamen['FECHA']; ?></p>
        </div>
          
           
        </div>
        <div class="col-md-2">
            <img src="php/temp/<?php echo $_GET['id'];?>.png" alt="Qrcode" class="qr">
        </div>
    </div>
</div>
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

<?php 
require_once 'php/footerHTML.php';
?>
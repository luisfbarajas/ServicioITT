<?php
if (isset($_POST)) {
    $try = json_decode($_POST['json']);
    echo var_dump($try);
//require_once 'php/headerHTML.php';
//require_once 'menuUsuario.php';

}
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
            <p>Luis Barajas</p>
            <br>
            <strong>
                <label>
                    Número de control:&nbsp;
                </label>
            </strong>
            <p>13210365</p>
            <br> 
            <strong>
                <label>
                    Correo:&nbsp;
                </label>
            </strong>
            <p>luis.barajas17@tectijuana.edu.mx</p>
            <br>
            </div>
            <div class="col-md-3"> 
                <strong>
                <label>
                    Carrera:&nbsp;
                </label>
            </strong>
            <p>ISC</p><br>
            <strong>
                <label>
                    Semestre:&nbsp;
                </label>
            </strong>
            <p>13</p> <br>
            <strong>
                <label>
                    Fecha de examen:&nbsp; 
                </label>
            </strong> 
            <p>12/12/2018</p>
        </div>
          
           
        </div>
        <div class="col-md-2">
            <img src="php/temp/test.png" alt="Qrcode" class="qr">
        </div>
    </div>
</div>

<?php 
require_once 'php/footerHTML.php';
?>
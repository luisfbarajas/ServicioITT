<?php

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML("<style>
.Titulo {
    text-align: center;
    font-size: 15px;
}

.Datos-Persona {
    font-size: 1rem;
}

.qr {
    width: 10rem;
}

.imagen {
    width: 50px;
    
    margin-top: 0px;
}

.contenedor {
    margin: 0 2%;
}

.gridContainer {
    display: grid;
    grid-template-columns: auto;
    padding: 10px;
   
}

.grap {

    display: grid;
    grid-column-gap: 50px;
    grid-template-columns: 1% 1%;
    border: 1px solid black;

}

.row {
    display: grid;
    grid-row-gap: 100%;
    grid-template-columns: 50% 50%;
  
}
.row2{
    display: grid;
    grid-row-gap: 100%;
    grid-template-columns: 30% 70%; 
}
</style>
<div class='gridContainer'>
<div class='grap'>
<div class='row2' style='border: 1px solid red; width: 20%;'>
    <img src='img/logo.png' alt='logo' class='imagen'>
    </div>
    <div class='row2' >
        <h1 class='Titulo'>Instituto Tecnologico de Tijuana</h1>
        <h3 class='Titulo'>Coordicación de lenguas extranjeras.</h3>
    </div>
</div>
<hr>


<div class='gridContainer'>
    <div>
        <h4>Comprobante de inscripción</h4>
    </div>
    <div class='Datos-Persona contenedor'>
        <div class='row'>
            <div>
                <p> <strong><label>Nombre: </label> </strong>Luis Francisco Barajas</p>
            </div>
            <div>
                    
                    <p><strong><label>Carrera: </label></strong>Ing. en Sistemas Computacionales</p>
            </div>
        </div>
        <div class='row'>
            <div>
                <p> <strong><label>Semestre: </label> </strong>12</p>
            </div>
            <div>
                    
                    <p><strong><label>Folío de pago: </label></strong>123456789</p>
            </div>
        </div>
        <div class='row'>
            <div>
                <p> <strong><label>Fecha de examen: </label> </strong>12/12/2018</p>
            </div>
            <div>
                    
                    <p><strong><label>Hora: </label></strong>10:30AM</p>
            </div>
        </div>

    </div>
    <div>
    </div>

    <h4>Comprobante QR</h4>
    <div>
        <img src='php//temp/test.png' alt='Tec' class='qr'>
    </div>
</div>

</div>
");
$html2pdf->output();


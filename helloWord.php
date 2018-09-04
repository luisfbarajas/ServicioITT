<?php

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML("<h1 style='margin-rigth: 20px;'>Instituto Tecnologico de Tijuana</h1> <hr>
<p> algo que mostrar </p>
");
$html2pdf->output();

